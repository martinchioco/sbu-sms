<?php
session_start();
$link = new mysqli('localhost','root','','SAD');
    $title = $_POST['title'];
    $projno = $_POST['projno'];
else if(isset($_POST['delete'])){
    $qry="DELETE * FROM projects WHERE '$projno'=projno";
    $qry="DELETE * FROM projinfo WHERE '$projno'=projno";
    mysqli_query($link,$qry);
    mysqli_query($link,$qry2);
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Successfully Deleted');
    </script>");
    header("refresh:0;url=admin.php");
    mysqli_close($link);
}
?>