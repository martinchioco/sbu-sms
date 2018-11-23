<?php
$link = new mysqli('us-cdbr-iron-east-01.cleardb.net','bd7296d2ac0eff','4b840f06','heroku_a71bbafdab8fcb3');
    $title = mysql_real_escape_string($_POST['title']);
    $year = mysql_real_escape_string($_POST['year']);
    $grp = mysql_real_escape_string($_POST['grp']);
    $projno = mysql_real_escape_string($_POST['projno']);
    $abstract = mysql_real_escape_string($_POST['objectuves']); 
    $objectives = mysql_real_escape_string($_POST['objectives']);
    $scope = mysql_real_escape_string($_POST['scope']);
    $purpose = mysql_real_escape_string($_POST['purpose']); 
    $count=0;
    //$proj1 = str_ireplace($_POST['proj']);
if(empty($title)){
    echo "Empty Project Title!";
    header("refresh:2; url=addrec.html");
}
else{
    $qry = "INSERT INTO projects VALUES('$title',$year,'$grp','')";
    $qry2= "SELECT * FROM projects";
    $qry3 = "INSERT INTO projinfo VALUES('','$abstract','$objectives','$scope','$purpose')";
    $res = mysqli_query($link,$qry2);
        while($row = mysqli_fetch_array($res)):
            // $Check= str_ireplace($row['Title']);
            if(strcasecmp($title , $row['Title']) == 0){
                echo "Identical With Group No. " . $row['grpnum'] . " with year " . $row['yr'];
                header("refresh:2; url=addrec.html");
                mysqli_close($link);
                $count++;
            }
        endwhile;
    if($count == 0){
        mysqli_query($link,$qry);
        mysqli_query($link,$qry3);
        header("refresh:2;admin.php");
        mysqli_close($link);
    }
}
?>