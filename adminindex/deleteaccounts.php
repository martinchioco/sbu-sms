<?php
session_start();
$link = new mysqli('us-cdbr-iron-east-01.cleardb.net','bd7296d2ac0eff','4b840f06','heroku_a71bbafdab8fcb3');
    $account_id = $_POST['account_id'];

    $qry="DELETE FROM acc_info WHERE $account_id=account_id";
    mysqli_query($link,$qry);
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Successfully Deleted');
 </script>");
header("refresh:0;url=manageaccounts.php");
    mysqli_close($link);
