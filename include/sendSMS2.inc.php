<?php
       if(isset($_POST['sender'])){
            $sender= $_POST['sender']; //Mobile Number
            $fname =$_POST['email']; //it is full name of user
         $otp=checkMobile($sender);
         if($otp){
              echo('Mobile Number is already registered!');
             return;
         }
           
           else {
             $otp=mt_rand(100000,999999);
             if(sendSMS($sender,$otp)){
                echo('OTP Sent! Please Enter OTP');
                 registerUser($fname,$sender,$otp);
                 return;
             }
         }
            
         }
function checkMobile($sender){
include_once('database.php');
$db = new Database();
$db->query("select count(fullname) as result from users where mobileno=:mobileno");
$db->bind(":mobileno",$sender,PDO::PARAM_STR);
$row = $db->single();
if($row['result']>0){
    return true;
}else
    return false;
}    

function sendSMS($mob,$reg){
    $uname="20130443";
    $password="coer@1573179";
    $send="COERKE";
    $dest=$mob;
    $regis=$reg;
    $msg="Your One Time Password for COER Registration Portal is ".$regis. " College of Engineering Roorkee (COER) http://coer.ac.in, 90279 16020";
    $data = array("uname"=>$uname,
                 "pass"=>$password,
                  "send"=>$send,
                  "dest"=>$dest,
                  "msg"=>$msg,
                  "priority"=>1,
                  "schtm"=>"2018-01-17 11:59"
                 );
    $string =http_build_query($data);
  
    $ch = curl_init("http://103.247.98.91/API/SendMsg.aspx");
    curl_setopt($ch,CURLOPT_POST,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$string);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $status = curl_exec($ch);
    curl_close($ch);
    return $status;
}

function registerUser($fname,$mobile,$otp){
    include_once ('database.php');
   $db = new Database();
$db->query("insert into users(fullname,mobileno,otp) values(:fname,:mobile,:otp)");
$db->bind(":fname",$fname,PDO::PARAM_STR);
$db->bind(":mobile",$mobile,PDO::PARAM_STR);
$db->bind(":otp",$otp,PDO::PARAM_STR);
$db->execute();
if($db->lastInsertId()){
    return true;
}else
    return false;

}
?>