<?php 
session_start();
$_SESSION = array();
session_destroy();

if(empty($_SESSION["user"])){
    echo ("<script LANGUAGE='JavaScript'>
        window.alert('Successfully Logout');
     </script>");
    header("refresh:0;url=../index.php");
  }