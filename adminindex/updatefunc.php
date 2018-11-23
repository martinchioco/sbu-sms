<?php
session_start();
$link = new mysqli('us-cdbr-iron-east-01.cleardb.net','bd7296d2ac0eff','4b840f06','heroku_a71bbafdab8fcb3');
$title = mysql_real_escape_string($_POST['title']);
$year = mysql_real_escape_string($_POST['year']);
$grp = mysql_real_escape_string($_POST['grp']);
$projno = mysql_real_escape_string($_POST['projno']);
$abstract = mysql_real_escape_string($_POST['objectuves']); 
$objectives = mysql_real_escape_string($_POST['objectives']);
$scope = mysql_real_escape_string($_POST['scope']);
$purpose = mysql_real_escape_string($_POST['purpose']);


    $qry = "UPDATE projects SET Title = '$title' , yr='$year', grpnum='$grp' WHERE $projno = projno";
    $qry2 = "UPDATE projinfo SET abstract = '$abstract' , objectives='$objectives', scope ='$scope', purpose='$purpose' WHERE $projno = projno";
    mysqli_query($link,$qry);
    mysqli_query($link,$qry2);
    echo "Successfully Updated! ". $title ." ".$projno;
    header("refresh:2;url=admin.php");
    mysqli_close($link);
