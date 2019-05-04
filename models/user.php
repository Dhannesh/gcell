<?php
class UserModel extends Model
{
    public function register()
    {
      //Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if ($post['submit']) {
           
           //INsert into MySQL
            $password = md5($post['password']);
            $this->query("insert into users(name,email,password,dept,register_date) values(:name,:email,:password,:dept,Now())");
            $this->bind(":name", $post['name']);
            $this->bind(":email", $post['email']);
            $this->bind(":dept", $post['dept']);
            $this->bind(":password", $password);
            $this->execute();
           //Verify 
            if ($this->lastInsertId()) {
               //Redirect
                header('Location: ' . ROOT_URL . 'users/login');
            }
            return;

        }
    }
    
     public function secure()
    {
         
      //Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if ($post['submit']) {
           
           //INsert into MySQL
            $oldPassword = md5($post['oldPassword']);
            $newPassword = md5($post['newPassword']);
            $retypeNewPassword = md5($post['retypeNewPassword']);
            if($newPassword!=$retypeNewPassword){
                Messages::setMsg('Incorrect New Password & Retype Password','error');
                return;
            }
            $this->query("select * from users where email=:email and password=:password");
            $this->bind(":email", $_SESSION['user_data']['email']);
            $this->bind(":password", $oldPassword);
            $row = $this->single();
            if ($row) {
            $this->query("update users set password=:password where email=:email and password=:oldPassword");
            $this->bind(":email",  $_SESSION['user_data']['email']);
            $this->bind(":oldPassword", $oldPassword);
            $this->bind(":password", $newPassword);
            //Verify 
            if ($this->execute()>0) {
               //Redirect
                Messages::setMsg('Password Changed Successfully!','success');
            }
            }else{
                 Messages::setMsg('Incorrect old Password','error');
            }
            return;

        }
    }
    
    public function resetPassword()
    {
        if (isset($_POST['resetPass'])) {
            $id = $_POST['delete_id'];
            $this->resetPass($id);
        }
        
           if (isset($_POST['delete'])) {
            $id = $_POST['delete_id'];
            $this->delete($id);
        }
        $this->query("select * from users");
        $rows = $this->resultSet();
        return $rows;
           
    }
    
     private function delete($id)
    {
        $this->query("delete from users where id=:id");
        $this->bind(":id", $id);
        $this->execute();
        return;
    }
    
    private function resetPass($id)
    {
        $password="12345";
        $this->query("update users set password=:password where id=:id");
        $this->bind(":id", $id);
        $this->bind(":password", md5($password));
        
        if($this->execute()>0){
             Messages::setMsg('Password Changed to Default','error');
        }else{
            Messages::setMsg('Error to Password Reset','error');
        }
        return;
    }
    
    public function login()
    {
         //Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if ($post['submit']) {
              
            //COmpare Login 
            $password = md5($post['password']);
            $this->query("select * from users where email=:email and password=:password");
            $this->bind(":email", $post['email']);
            $this->bind(":password", $password);
            $row = $this->single();
            if ($row) {
                $_SESSION['is_logged_in']=true;
                $_SESSION['user_data']=array(
                    "id"=>$row['id'],
                    "name"=>$row['name'],
                    "dept"=>$row['dept'],
                     "email"=>$row['email']
                   
                );
                header('Location: ' . ROOT_URL . 'shares');
            } else {
                Messages::setMsg('Incorrect Login','error');
            }
            return;
        }
    }
}