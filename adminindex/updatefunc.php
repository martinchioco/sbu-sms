<?php
session_start();
$link = new mysqli('us-cdbr-iron-east-01.cleardb.net','bd7296d2ac0eff','4b840f06','heroku_a71bbafdab8fcb3');
$title = $_POST['title'];
$year = $_POST['year'];
$grp = $_POST['grp'];
$projno = $_POST['projno'];
$abstract = $_POST['abstract']; 
$objectives = $_POST['objectives'];
$scope = $_POST['scope'];
$purpose = $_POST['purpose'];


    $qry = "UPDATE projects SET Title = '$title' , yr='$year', grpnum='$grp' WHERE $projno = projno";
    $qry2 = "UPDATE projinfo SET abstract = '$abstract' , objectives='$objectives', scope ='$scope', purpose='$purpose' WHERE $projno = projno";
    mysqli_query($link,$qry);
    mysqli_query($link,$qry2);
    echo "Successfully Updated! ". $title ." ".$projno;
    header("refresh:2;url=admin.php");
    mysqli_close($link);
