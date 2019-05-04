<?php
class ShareModel extends Model
{
    public function Index()
    {
        if (isset($_POST['delete'])) {
            $id = $_POST['delete_id'];
            $this->delete($id);
        }
        
        $this->query('select * from product order by pid desc');
        $rows = $this->resultSet();
        return $rows;
    }

    public function details(){
        if($_SESSION['user_data']['name']=='admin'){
            $this->query('select * from gcomplaint where srno=:srno');
            $this->bind(":srno", $_REQUEST['id'],PDO::PARAM_STR);
        }else{
        $this->query('select * from gcomplaint where srno=:srno and userno=:userno');
        $this->bind(":userno", $_SESSION['user_data']['id'],PDO::PARAM_STR);
        $this->bind(":srno", $_REQUEST['id'],PDO::PARAM_STR);
        }
        $row=$this->single();
        if($row){
            return $row;
        }else{
            header('Location: '.ROOT_URL.'shares/show');
        }
    }

    public function show(){
        if($_SESSION['user_data']['name']=='admin')
        {
            $this->query('select * from gcomplaint order by srno desc');
        
        }else{
        $this->query('select * from gcomplaint where userno=:userno order by srno desc');
        $this->bind(":userno", $_SESSION['user_data']['id'],PDO::PARAM_STR);
        }
        $rows = $this->resultSet();
        return $rows;
    }
    
    public function update(){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
       if($_SESSION['user_data']['name']=='admin')
        {
            if(isset($post['submit'])){
                $this->query('update gcomplaint set status=:status, comments=:comments where srno=:srno');
                $this->bind(':status',$post['status'],PDO::PARAM_STR);
                $this->bind(':comments',$post['comments'],PDO::PARAM_STR);
                $this->bind(':srno',$post['cno'],PDO::PARAM_STR);
                $this->execute();
                header('Location: '.ROOT_URL.'shares/show');
            }else{

            
            $this->query('SELECT gcomplaint.*,users.fullname FROM gcomplaint,users WHERE gcomplaint.srno=:srno and gcomplaint.userno=users.userno');
           // $this->query('select * from gcomplaint where srno=:srno');
            $this->bind(":srno",$_REQUEST['id'],PDO::PARAM_STR);
           $row= $this->single();
           return $row;
            }
        }
       
    }
    
    private function delete($id)
    {
        $this->query("delete from product where pid=:id");
        $this->bind(":id", $id);
        $this->execute();
        Messages::setMsg('Product Deleted Successfully!','success');
        return;
    }
        
public function add()
    {
       //Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($post['submit'])) {
             $this->query("insert into gcomplaint(type,details,doc,userno,status) values(:gtype,:comDetails,now(),:userno,:status)");
            $this->bind(":gtype", $post['gtype'],PDO::PARAM_STR);
            $this->bind(":comDetails", $post['comDetails'],PDO::PARAM_STR);
            $this->bind(":userno", $_SESSION['user_data']['id'],PDO::PARAM_STR);
            $this->bind(":status", "Open",PDO::PARAM_STR);
            $this->execute();
            $id = $this->lastInsertId();
            if($id){
                Messages::setMsg('Complaint No.:'.$id.' Added Successfully!','success');
            }else{
                Messages::setMsg('Not Added!','error');
            }
            return;
        }
    }
   

}