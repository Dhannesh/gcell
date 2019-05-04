<?php

       if(isset($_POST['sender'])){
            $sender= $_POST['sender']; //Mobile Number
            $fname =$_POST['email']; //it is full name of user
            $userOtp = $_POST['userOTP']; // user entered otp
           $pass = $_POST['pass1']; //User Password
           $otp=getOTP($fname,$sender);
           
         if($otp==$userOtp){
              if(updatePass($fname,$sender,$pass))
              {
                  echo "User Registered successfully! Please <a href='#' data-toggle='modal' data-target='#loginModal'class='btn btn-primary'>Login</a>";
              }
         }else{
             echo "Invalid OTP!";
         }
         }

function updatePass($fname,$mobile,$pass1){
    include_once ('database.php');
   $db = new Database();
$db->query("update users set password=:pass1 where fullname=:fname and mobileno=:mobile");
$db->bind(":fname",$fname,PDO::PARAM_STR);
$db->bind(":mobile",$mobile,PDO::PARAM_STR);
$db->bind(":pass1",md5($pass1),PDO::PARAM_STR);
    return $db->execute();
 
}

function getOTP($fname,$mobile){
    
include_once('database.php');
$db = new Database();
$db->query("select otp from users where fullname=:fullname and mobileno=:mobile");
$db->bind(":fullname",$fname,PDO::PARAM_STR);
$db->bind(":mobile",$mobile,PDO::PARAM_STR);
$row=$db->single();
if($row){
    return $row['otp'];
}else
    return 0;
    
}
?>