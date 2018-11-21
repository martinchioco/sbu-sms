<?php
session_start();
$link = new mysqli('localhost','root','','SAD');
    $user = $_POST['user'];
    $pass = md5($_POST['pass']);

$qry = "SELECT * FROM acc_info WHERE user='$user'";
$result = mysqli_query($link,$qry);
$resultCheck = mysqli_num_rows($result);
    if($resultCheck < 1){
        echo "Username not existing!";
        header("refresh:1;url=index.php");
    }
    while($row = mysqli_fetch_array($result)):
        if($pass == $row['pass']){
            $_SESSION["user"] = $row['user'];

        if($row['acctype'] == 'administrator') {
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Welcome Admin!');
            </script>");
            header("refresh:0; url=adminindex/admin.php");;
        }
        else if($row['acctype'] == 'student') {
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Welcome Student!');
            </script>");
            header("refresh:0; url=studentindex/student.php");;
        }
        
    }
    else{
        echo "Wrong username or password!";
        header("refresh:2;url=index.php");
    }
endwhile;
mysqli_close($link);
?>