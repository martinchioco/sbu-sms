<?php
    session_start();
    if(empty($_SESSION["user"])){
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('Please Login'); 
         </script>");
        header("refresh:0;url=../index.php");
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
                <a class="nav-link active" href="student.php">
                  <span data-feather="home"></span>
                  Projects <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="submitproposal.php">
                  <span data-feather="file"></span>
                  Submit Proposal
                </a>

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


      
      
          <form method="POST" action="submitproposalfunc.php" target="blank">
          <table>
                            <td style="width: 50%">
                                <label><b>Group Code:</b></label><br>
                                <input type="text" name="groupcode" maxlength="30" style="width: 360px" required>
                            </td>
                            <td style="width: 50%">
                                <label><b>Date Submitted:</b></label><br>
                                <input type="date" name="submitdate" required>
                            </td>
                            
                            <tr></tr>
                            
                            <td style="width: 50%">
                                <br><br><br>
                                <label><b>Leader:</b></label><br>
                            </td> 
                            
                            <tr>
                            <td style="width: 50%">
                                <label><b>First Name:</b></label><br>
                                <input type="text" name="lfname" maxlength="30" style="width: 360px" required>
                            </td>
                            <td style="width: 50%">
                                <label><b>Last Name:</b></label><br>
                                <input type="text" name="llname" maxlength="20" style="width: 360px" required>
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
                                <input type="text" name="m1fname" maxlength="30" style="width: 360px" required>
                            </td>
                            <td style="width: 50%">
                                <label><b>Last Name:</b></label><br>
                                <input type="text" name="m1lname" maxlength="20" style="width: 360px" required>
                            </td>
                            </tr>
                            <tr>
                            <td style="width: 50%">
                                <label><b>First Name:</b></label><br>
                                <input type="text" name="m2fname" maxlength="30" style="width: 360px" required>
                            </td>
                            <td style="width: 50%">
                                <label><b>Last Name:</b></label><br>
                                <input type="text" name="m2lname" maxlength="20" style="width: 360px" required>
                            </td>
                            </tr>
                            <tr>
                            <td style="width: 50%">
                                <label><b>First Name:</b></label><br>
                                <input type="text" name="m3fname" maxlength="30" style="width: 360px" required>
                            </td>
                            <td style="width: 50%">
                                <label><b>Last Name:</b></label><br>
                                <input type="text" name="m3lname" maxlength="20" style="width: 360px" required>
                            </td>
                            </tr>
                            <tr>
                            <td style="width: 50%">
                                <label><b>First Name:</b></label><br>
                                <input type="text" name="m4fname" maxlength="30" style="width: 360px" required>
                            </td>
                            <td style="width: 50%">
                                <label><b>Last Name:</b></label><br>
                                <input type="text" name="m4lname" maxlength="20" style="width: 360px" required>
                            </td>
                            </tr>


                           
                            <tr><td style="width: 50%">
                                <br><br><br>
                                <label><b>Title:</b></label><br>
                                <input type="text" name="title" maxlength="100" style="width: 360px" required>
                            </td> </tr>

                            <tr><td>
                                <br><br><br>
                                <label><b>BUSINESS PROFILE:  </b></label>
                            </td> </tr>

                            <tr><td>
                                <label><b>Owner’s Name:</b></label><br>
                                <input type="text" name="ownername" maxlength="30" style="width: 400px" required><br>
                                <label><b>Business Address:</b></label><br>
                                <input type="text" name="businessaddress" maxlength="30" style="width: 400px" required> <br>
                                <label><b>Number of Years of Existence:</b></label><br>
                                <input type="text" name="yearsexistence" maxlength="30" style="width: 400px" required> <br>
                                <label><b>Contact Number:</b></label><br>
                                <input type="text" name="contact" maxlength="30" style="width: 400px" required> 
                            </td></tr>
                            
                            <tr><td>
                                <label><b>Products/Services:</b></label><br>
                                <input type="text" name="productservice" maxlength="30" style="width: 400px" required><br>
                            </td></tr>
                            <tr><td>
                                <label><b>Number of Transactions Per Day/Month:</b></label><br>
                                <input type="text" name="transactionnum" maxlength="20" style="width: 400px" required>
                            </td></tr>
                            
                            <tr><td>
                                <label><b>Number of Branches and their locations:</b></label><br>
                                <input type="text" name="branchloc" maxlength="20" style="width: 400px" required>
                            </td></tr>
                                
                            <tr><td>
                                <label><b>SCOPE OF THE STUDY </b></label><br>
                                <textarea style="resize:none" rows="5" cols="80" name="scope" required></textarea>
                            </td></tr>
               

                            <tr><td colspan="2" style="text-align: center">
                                <br><br>
                                <input class="btn btn-outline-dark" name="skip_submit" type="submit" value="Submit Proposal">        
                            </td></tr>

          </table>
          </form>
          

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="jquery/feather.min.js"></script>
    <script>
      feather.replace()
    </script>


    
   <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="jquery/jquery-slim.min.js"><\/script>')</script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="jquery/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
  </body>
</html>