<?php
    session_start();
    $link = new mysqli('us-cdbr-iron-east-01.cleardb.net','bd7296d2ac0eff','4b840f06','heroku_a71bbafdab8fcb3');
    $proposalnum = $_POST['proposalnum'];
    if(isset($_POST['view'])){
        $qry = "SELECT * FROM projectproposal WHERE '$proposalnum'=proposalnum";
        $result = mysqli_query($link,$qry);

        if(empty($_SESSION["user"])){
      echo ("<script LANGUAGE='JavaScript'>
          window.alert('Please Login'); 
       </script>");
      header("refresh:0;url=../index.php");
    }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>SAD Management System</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  
  <body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top background" style="background-color: #000000;">
        

 <div class="dropdown">
  <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <?php echo $_SESSION["user"]?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="LogOut.php">Logout</a>
    <a class="dropdown-item" href="register.php">Register account</a>
    <a class="dropdown-item" href="manageaccounts.php">Manage Accounts</a>
  </div>
</div>





<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarsExampleDefault">
<ul class="navbar-nav mr-auto">
<li class="nav-item">
</li>
</ul>

<form class="form-inline my-2 my-lg-0" method="POST" action="index.php">
<input class="form-control mr-sm-2" type="text" ria-label="Search" name="searchit" placeholder="Search..">
<input class="btn btn-outline-light my-2 my-sm-0" type="submit" name="search" value="Search">
</form>
</div>
</nav>  

<br><br>


    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="admin.php">
                  <span data-feather="home"></span>
                  Projects <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="view_proposals.php">
                  <span data-feather="file"></span>
                  View Proposal
                </a>
            </li>
              <li class="nav-item">
                        <a class="nav-link" href="addproject.php">
                          <span data-feather="file"></span>
                          Add Project
                        </a>
                    </li>
  
            </ul>
          </div>
        </nav>

    
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">    SAD RESEARCH PROPOSAL
                                <br>
                                ICT 18 – Systems Analysis and Design 1
                            </h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
              </div>

            </div>
          </div>


      
          <form method="POST" action="accept_reject.php">
          <table>
          <?php while($row = mysqli_fetch_array($result)):?>
                            <td style="width: 50%">
                                <label><b>Group Code:</b></label><br>
                                <input type="text" name="groupcode" maxlength="30" value="<?php echo $row['groupcode']?>" style="width: 360px" readonly>
                            </td>
                            <td style="width: 50%">
                                <label><b>Date Submitted:</b></label><br>
                                <input type="date" name="submitdate" value="<?php echo $row['submitdate']?>" readonly>
                            </td>
                            
                            <tr></tr>
                            
                            <td style="width: 50%">
                                <br><br><br>
                                <label><b>Leader:</b></label><br>
                            </td> 
                            
                            <tr>
                            <td style="width: 50%">
                                <label><b>First Name:</b></label><br>
                                <input type="text" name="lfname" maxlength="30" style="width: 360px" value ="<?php echo $row['lfname']?>" readonly>
                            </td>
                            <td style="width: 50%">
                                <label><b>Middle Name:</b></label><br>
                                <input type="text" name="llname" maxlength="20" style="width: 360px" value ="<?php echo $row['llname']?>" readonly>
                            </td>
                            </tr>
                        
                            <tr>
                            <td style="width: 50%">
                                <br><br><br>
                                <label><b>Members:</b></label><br>
                            </td>
                            </tr>
                            <tr>
                            <td style="width: 50%">
                                <label><b>First Name:</b></label><br>
                                <input type="text" name="m1fname" maxlength="30" style="width: 360px" value ="<?php echo $row['m1fname']?>" readonly>
                            </td>
                            <td style="width: 50%">
                                <label><b>Last Name:</b></label><br>
                                <input type="text" name="m1lname" maxlength="20" style="width: 360px" value ="<?php echo $row['m1lname']?>" readonly>
                            </td>
                            </tr>
                            <tr>
                            <td style="width: 50%">
                                <label><b>First Name:</b></label><br>
                                <input type="text" name="m2fname" maxlength="30" style="width: 360px" value ="<?php echo $row['m2fname']?>" readonly>
                            </td>
                            <td style="width: 50%">
                                <label><b>Last Name:</b></label><br>
                                <input type="text" name="m2lname" maxlength="20" style="width: 360px" value ="<?php echo $row['m2lname']?>" readonly>
                            </td>
                            </tr>
                            <tr>
                            <td style="width: 50%">
                                <label><b>First Name:</b></label><br>
                                <input type="text" name="m3fname" maxlength="30" style="width: 360px" value ="<?php echo $row['m3fname']?>" readonly>
                            </td>
                            <td style="width: 50%">
                                <label><b>Last Name:</b></label><br>
                                <input type="text" name="m3lname" maxlength="20" style="width: 360px" value ="<?php echo $row['m3lname']?>" readonly>
                            </td>
                            </tr>
                            <tr>
                            <td style="width: 50%">
                                <label><b>First Name:</b></label><br>
                                <input type="text" name="m4fname" maxlength="30" style="width: 360px" value ="<?php echo $row['m4fname']?>" readonly>
                            </td>
                            <td style="width: 50%">
                                <label><b>Last Name:</b></label><br>
                                <input type="text" name="m4lname" maxlength="20" style="width: 360px" value ="<?php echo $row['m4lname']?>" readonly>
                            </td>
                            </tr>


                           
                            <tr><td style="width: 50%">
                                <br><br><br>
                                <label><b>Title:</b></label><br>
                                <input type="text" name="title" maxlength="100" style="width: 360px" value ="<?php echo $row['title']?>" readonly>
                            </td> </tr>

                            <tr><td>
                                <br><br><br>
                                <label><b>BUSINESS PROFILE:  </b></label>
                            </td> </tr>

                            <tr><td>
                                <label><b>Owner’s Name:</b></label><br>
                                <input type="text" name="ownername" maxlength="30" style="width: 400px" value ="<?php echo $row['ownername']?>" readonly><br>
                                <label><b>Business Address:</b></label><br>
                                <input type="text" name="businessaddress" maxlength="30" style="width: 400px" value ="<?php echo $row['businessaddress']?>" readonly> <br>
                                <label><b>Number of Years of Existence:</b></label><br>
                                <input type="text" name="yearsexistence" maxlength="30" style="width: 400px" value ="<?php echo $row['yearsexistence']?>" readonly> <br>
                                <label><b>Contact Number:</b></label><br>
                                <input type="text" name="contact" maxlength="30" style="width: 400px" value ="<?php echo $row['contact']?>" readonly> 
                            </td></tr>
                            
                            <tr><td>
                                <label><b>Products/Services:</b></label><br>
                                <input type="text" name="productservice" maxlength="30" style="width: 400px" value ="<?php echo $row['productservice']?>" readonly><br>
                            </td></tr>
                            <tr><td>
                                <label><b>Number of Transactions Per Day/Month:</b></label><br>
                                <input type="text" name="transactionnum" maxlength="20" style="width: 400px" value ="<?php echo $row['transactionnum']?>" readonly>
                            </td></tr>
                            
                            <tr><td>
                                <label><b>Number of Branches and their locations:</b></label><br>
                                <input type="text" name="branchloc" maxlength="20" style="width: 400px" value ="<?php echo $row['branchloc']?>" readonly>
                            </td></tr>
                                
                            <tr><td>
                                <label><b>SCOPE OF THE STUDY </b></label><br>
                                <input type="text" style=" height:200px;width:800px;" name="scope"  value ="<?php echo $row['scope']?>" readonly>
                            </td></tr>
               

                          <div>
                          <tr><td colspan="2" style="text-align: center">
                                <br><br>
                                
                                <input class="btn btn-outline-dark" name="accept" type="submit" value="ACCEPT">
                                <input class="btn btn-outline-dark" type="submit" name="reject" value="REJECT">
                                <input type="hidden" name="groupcode" value="<?php echo $row['groupcode']?>"> 
                                
                            </td></tr>
                            </div>
                            <?php endwhile;?>
          </table>
          </form>
     




   <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="jquery/jquery-slim.min.js"><\/script>')</script>
    <script src="jquery/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="jquery/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
  </body>
</html>