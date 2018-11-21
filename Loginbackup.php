<?php
session_start();
$link = new mysqli('localhost','root','','SAD');
    $user = $_POST['user'];
    $pass = md5($_POST['pass']);
if(empty($user) || empty($pass)){
    echo "EMPTY USERNAME or/and PASSWORD!";
    header("refresh:2;url=index.php");
}
else{
    $qry = "SELECT * FROM acc_info WHERE username='$user'";
    $result = mysqli_query($link,$qry);
    $resultCheck = mysqli_num_rows($result);
        if($resultCheck < 1){
            echo "Username not existing!";
            header("refresh:1;url=index.php");
        }
        else{
            while($row = mysqli_fetch_array($result)):
                if($pass == $row['password']){
                    if($user == "admin"){
                        $_SESSION["user"] = $row['username'];
                        header("refresh:0; url=adminindex/admin.php");
                    }
                    else{
                        $_SESSION["user"] = $row['username'];
                        header("refresh:0; url=studentindex/student.php");
                    }
                }
                else{
                    echo "Wrong Password!";
                    header("refresh:2;url=index.php");
                }
            endwhile;
        }
}
mysqli_close($link);

?>