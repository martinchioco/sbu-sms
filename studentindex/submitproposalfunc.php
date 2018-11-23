<?php
$link = new mysqli('us-cdbr-iron-east-01.cleardb.net','bd7296d2ac0eff','4b840f06','heroku_a71bbafdab8fcb3');
$groupcode = $_POST['groupcode'];
$submitdate = $_POST['submitdate'];
$lfname = $_POST['lfname'];
$llname = $_POST['llname'];
$m1fname = $_POST['m1fname'];
$m1lname = $_POST['m1lname'];
$m2fnme = $_POST['m2fname'];
$m2lname = $_POST['m2lname'];
$m3fnme = $_POST['m3fname'];
$m3lname = $_POST['m3lname'];
$m4fnme = $_POST['m4fname'];
$m4lname = $_POST['m4lname'];
$title = $_POST['title'];
$ownername = $_POST['ownername'];
$businessaddress = $_POST['businessaddress'];
$yearsexistence = $_POST['yearexistence'];
$contact = $_POST['contact'];
$productservice = $_POST['productservice'];
$transactionnum = $_POST['transactionnum'];
$branchloc = $_POST['branchloc'];
$scope = $_POST['scope'];



    $count=0;
    //$proj1 = str_ireplace($_POST['proj']);
        if(empty($groupcode)){
            echo "Empty Project Title!";
            //header("refresh:2; url=addrec.html");
        }
        else{
            $qry = "INSERT INTO projectproposal  VALUES ('$groupcode', '$submitdate', '$lfname', '$llname', '$m1fnme', '$m1lname', '$m2fnme', '$m2lname', '$m3fnme', '$m3lname', '$m4fnme', '$m4lname', '$title', '$ownername', '$businessaddress', '$yearsexistence','$contact', '$productservice', '$transactionnum', '$branchloc', '$scope')";
            $qry2= "SELECT * FROM projectproposal";
            $res = mysqli_query($link,$qry2);
                while($row = mysqli_fetch_array($res)):
                    // $Check= str_ireplace($row['Title']);
                    if(strcasecmp($groupcode , $row['groupcode']) == 0){
                        echo "Identical With Group No. " . $row['groupcode'];
                       // header("refresh:2; url=submitproposal.html");
                        mysqli_close($link);
                        $count++;
                    }
                endwhile;
            if($count == 0){
                mysqli_query($link,$qry);
                //header("refresh:2;student.php");
                mysqli_close($link);
            }
        }
       
require('PDF/fpdf.php');
//Cell(Space,MarginTop,'message',border,endl,align)
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
//HEADER
$pdf->SetFont('Times','B',20);
$pdf->Cell(0,20,'SAD Management System',1,1,'C');
$pdf->Cell(0,5,'',0,1);//endl
//HEADER
//BODY
$pdf->SetFont('Times','B',12);
$pdf->Cell(25,10,'Group Code: ',0,0); //Group Code
$pdf->Cell(30,10,$groupcode,0,1,'L'); //groupcode
$pdf->Cell(11,10,'Year: ',0,0); //Year
$pdf->Cell(30,10,$submitdate,0,1,'L'); //submitdate
$pdf->Cell(35,10,'',0,1); //endl
$pdf->SetFont('Times','B',16);
$pdf->Cell(180,10,'Leader',0,1,'C'); //Leader
$pdf->Cell(35,10,'',0,1); //endl
$pdf->SetFont('Times','B',12);
$pdf->Cell(25,10,'First Name: ',0,0); //First Name
$pdf->Cell(70,10,$lfname,1,0,'L'); 
$pdf->Cell(25,10,' Last Name: ',0,0); //Leader LastName
$pdf->Cell(70,10,$llname,1,1,'L'); 
$pdf->Cell(35,10,'',0,1); //endl
$pdf->SetFont('Times','B',16);
$pdf->Cell(180,10,'Members',0,1,'C'); //Members
$pdf->Cell(35,10,'',0,1); //endl
$pdf->SetFont('Times','B',12);
$pdf->Cell(25,10,'First Name: ',0,0); //Member1First Name
$pdf->Cell(70,10,$m1fnme,1,0,'L'); 
$pdf->Cell(25,10,' Last Name: ',0,0); //LastName
$pdf->Cell(70,10,$m1lname,1,1,'L'); 
$pdf->Cell(25,10,'First Name: ',0,0); //Member2First Name
$pdf->Cell(70,10,$m2fnme,1,0,'L'); 
$pdf->Cell(25,10,' Last Name: ',0,0); //LastName
$pdf->Cell(70,10,$m2lname,1,1,'L'); 
$pdf->Cell(25,10,'First Name: ',0,0); //Member3First Name
$pdf->Cell(70,10,$m3fnme,1,0,'L'); 
$pdf->Cell(25,10,' Last Name: ',0,0); //LastName
$pdf->Cell(70,10,$m3lname,1,1,'L'); 
$pdf->Cell(25,10,'First Name: ',0,0); //Member4First Name
$pdf->Cell(70,10,$m4fnme,1,0,'L'); 
$pdf->Cell(25,10,' Last Name: ',0,0); //LastName
$pdf->Cell(70,10,$m4lname,1,1,'L'); 
$pdf->Cell(35,10,'',0,1); //endl
$pdf->Cell(13,10,'Title: ',0,0); //Title
$pdf->Cell(160,10,$title,1,0,'L');
$pdf->Cell(35,10,'',0,1); //endl
$pdf->Cell(35,10,'',0,1); //endl
$pdf->SetFont('Times','B',16);
$pdf->Cell(180,10,'Business Profile',0,0,'C'); //Business Profile
$pdf->Cell(35,10,'',0,1); //endl
$pdf->SetFont('Times','B',12);
$pdf->Cell(30,10,"Owner's Name: ",0,0); //Owner's Name
$pdf->Cell(70,10,$ownername,1,0,'L'); 
$pdf->Cell(35,10,'',0,1); //endl
$pdf->Cell(35,10,'Business Address: ',0,0); //Business Address
$pdf->Cell(70,10,$businessaddress,1,0,'L'); 
$pdf->Cell(35,10,'',0,1); //endl
$pdf->Cell(57,10,'Number of Years of Existence: ',0,0); //Years of Existence
$pdf->Cell(70,10,$yearsexistence,1,0,'L');
$pdf->Cell(35,10,'',0,1); //endl
$pdf->Cell(34,10,'Contact Number: ',0,0); //Contact Number of the business or owner
$pdf->Cell(70,10,$contact,1,0,'L');
$pdf->Cell(35,10,'',0,1); //endl
$pdf->Cell(36,10,'Products/Services: ',0,0); //Products/Services offered by the business
$pdf->Cell(80,10,$productservice,1,0,'L'); 
$pdf->Cell(35,10,'',0,1); //endl
$pdf->Cell(95,10,'Number of Transactions Per Day/Month: ',0,0); //Transactions of the business
$pdf->Cell(35,10,'',0,1); //endl
$pdf->Cell(60,10,$transactionnum,1,0,'L'); 
$pdf->Cell(35,10,'',0,1); //endl
$pdf->Cell(95,10,'Number of Branches and their Locations: ',0,0); //The branches and locations of the business
$pdf->Cell(35,10,'',0,1); //endl
$pdf->MultiCell(190, 10, $branchloc, 1, 'J', 0, 2, '' ,'', true); 
$pdf->Cell(35,10,'',0,1); //endl
$pdf->Cell(35,10,'Scope of the Study: ',0,0); //Scope of the project proposal
$pdf->Cell(35,10,'',0,1); //endl
$pdf->MultiCell(190, 10, $scope, 1, 'J', 0, 2, '' ,'', true);
// set color for background
$pdf->SetFillColor(220, 255, 220);
//BODY
$pdf->Output();
?>