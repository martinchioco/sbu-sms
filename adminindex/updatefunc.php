<?php
session_start();
$link = new mysqli('localhost','root','','SAD');
$title = $_POST['title'];
$projno = $_POST['projno'];
$year = $_POST['year'];
$grp = $_POST['grp'];
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
