<?php
session_start();
$link = new mysqli('us-cdbr-iron-east-01.cleardb.net','bd7296d2ac0eff','4b840f06','heroku_a71bbafdab8fcb3');
$groupcode = $_POST['groupcode'];	
if(isset($_POST['accept'])){
    $qry = "Insert into proposeaccept SELECT * FROM projectproposal WHERE '$proposalnum' = proposalnum";
    $qry2="Delete from projectproposal where '$proposalnum' = proposalnum";
    mysqli_query($link,$qry);
    mysqli_query($link,$qry2);
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Successfully accepted'); 
    </script>");
    mysqli_close($link);
}
else if(isset($_POST['reject'])){
	$qry="Delete from projectproposal where '$proposalnum' = proposalnum";
    mysqli_query($link,$qry);
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Successfully rejected'); 
    </script>");
    header("refresh:2;url=view_proposals.php");
    mysqli_close($link);
}
?>