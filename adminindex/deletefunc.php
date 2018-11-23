<?php
session_start();
$link = new mysqli('us-cdbr-iron-east-01.cleardb.net','bd7296d2ac0eff','4b840f06','heroku_a71bbafdab8fcb3');
    $title = $_POST['title'];
    $projno = $_POST['projno'];
    $qry="DELETE * FROM projects WHERE '$projno'=projno";
    $qry="DELETE * FROM projinfo WHERE '$projno'=projno";
    mysqli_query($link,$qry);
    mysqli_query($link,$qry2);
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Successfully Deleted');
    </script>");
    header("refresh:0;url=admin.php");
    mysqli_close($link);
?>