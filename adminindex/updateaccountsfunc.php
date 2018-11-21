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
    header("refresh:0;url=manageaccounts.php");
    }
    else{
        $qry = "UPDATE acc_info SET account_id='$account_id', user = '$user' , pass = MD5('$pass'), acctype='$acctype', contact='$contact' WHERE '$account_id' = account_id";
        $qry2= "SELECT * FROM acc_info";
        $res = mysqli_query($link,$qry2);
           
        if($count == 0){
            mysqli_query($link,$qry);
            echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Successfully Updated!');
                 </script>");
            header("refresh:0;manageaccounts.php");
            mysqli_close($link);
        }
    }
    ?>