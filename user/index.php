<?php
session_start();
error_reporting(0);
include_once './config/core.php';
include_once './config/functioncollection.php';

if(empty($_SESSION['emailuser'])){
    echo "<script type='text/javascript'>window.location.href='../login/login.php'</script>";
   
}else{
    include_once './master.php';
}
?>