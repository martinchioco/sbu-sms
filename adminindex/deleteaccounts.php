<?php
session_start();
$link = new mysqli('localhost','root','','SAD');
    $account_id = $_POST['account_id'];

    $qry="DELETE FROM acc_info WHERE $account_id=account_id";
    mysqli_query($link,$qry);
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Successfully Deleted');
 </script>");
header("refresh:0;url=manageaccounts.php");
    mysqli_close($link);
