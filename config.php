<?php

define("DB_HOST","localhost");
define("DB_USER","coerac_root");
define("DB_PASS","sallu@123");
define("DB_NAME","coerac_gcell");

if($_SERVER['SERVER_NAME']=='localhost'){
    define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/admin');
}else{
    define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
}
define("ROOT_URL","https://coer.ac.in/gcell/");