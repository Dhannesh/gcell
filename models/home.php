<?php
class HomeModel extends Model{
    public function login()
    {
         //Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if ($post['submit']) {
            //Compare Login 
            if($post['submit']==="login"){
            $this->doLogin($post);
            }
            return;
        }
    }
        
    
//    public function doRegister($post){
//             $password = md5($post['pass']);
//            $this->query("insert into users(fullname,mobileno,password) values(:fullname,:mobileno,:password)");
//
//            $this->bind(":fullname", $post['fname'],PDO::PARAM_STR);
//            $this->bind(":password", $password,PDO::PARAM_STR);
//            $this->bind(":mobileno", $post['mobile'],PDO::PARAM_STR);
//            $this->execute();
//             if ($this->lastInsertId()) {
//               //Redirect
//                //header('Location: ' . ROOT_URL . 'users/login');
//                 Messages::setMsg('User Registered','success');
//            }else{
//                 Messages::setMsg('Mobile No is Already Registered','error');
//             }
//            return;
//    }
        
        public function doLogin($post){
         //Sanitize POST
     

        if ($post['submit']) {
            //Compare Login 
             $password = md5($post['pass']);
            $this->query("select * from users where mobileno=:mobile and password=:password");

            $this->bind(":mobile", $post['mobile'],PDO::PARAM_STR);
            $this->bind(":password", $password,PDO::PARAM_STR);
            $row = $this->single();
            
            if ($row) {
               
                $_SESSION['is_logged_in']=true;
                $_SESSION['user_data']=array(
                    "id"=>$row['userno'],
                    "name"=>$row['fullname'],
                    "mobile"=>$row['mobileno'],
                    
                );
                header('Location: ' . ROOT_URL . 'shares');
            } else {
                Messages::setMsg('Incorrect Login','error');
            }
            return;
        }
    }
}