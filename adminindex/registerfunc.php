<?php
$link = new mysqli('localhost','root','','SAD');
    $account_id = $_POST['account_id'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $acctype = $_POST['acctype'];
    $contact = $_POST['contact']; 
    $count = 0;

    if($acctype == 'retry'){
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Please check account type entered!');
     </script>");
    header("refresh:0;url=register.php");
    }
    else{
        $qry = "INSERT INTO acc_info VALUES('','$user',md5('$pass'),'$acctype','$contact')";
        $qry2= "SELECT * FROM acc_info";
        $res = mysqli_query($link,$qry2);
            while($row = mysqli_fetch_array($res)):
                // $Check= str_ireplace($row['Title']);
                if(strcasecmp($user , $row['user']) == 0){
                    echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Username already used');
                 </script>");
                header("refresh:0;url=register.php");
                    mysqli_close($link);
                    $count++;
                }
            endwhile;
        if($count == 0){
            mysqli_query($link,$qry);
            echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Successfully Registered!');
                 </script>");
            header("refresh:0;admin.php");
            mysqli_close($link);
        }
    }
    ?>