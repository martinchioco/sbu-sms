<?php
session_start();
$link = new mysqli('us-cdbr-iron-east-01.cleardb.net','bd7296d2ac0eff','4b840f06','heroku_a71bbafdab8fcb3');
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
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Incorrect username/password!');
            </script>");
        header("refresh:2;url=index.php");
    }
endwhile;
mysqli_close($link);
?>