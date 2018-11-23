<?php
    session_start();
    $link = new mysqli('us-cdbr-iron-east-01.cleardb.net','bd7296d2ac0eff','4b840f06','heroku_a71bbafdab8fcb3');
    if(isset($_POST['search'])){
        $search = $_POST['searchit'];
        $qry = "SELECT * FROM projectproposal where groupcode='$_SESSION["user"]'";
        $result = mysqli_query($link,$qry);
    }
    
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
              </li>
              <li class="nav-item">
                <a class="nav-link" href="view_proposals.php">
                  <span data-feather="file"></span>
                  View Submitted Proposals
                </a>
              </li>
            </ul>
          </div>
        </nav>
    
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Proposed Projects</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
              </div>

            </div>
          </div>


            <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Project Title</th>
                <th scope="col">Group</th>
                <th scope="col">View</th>  
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php while($row = mysqli_fetch_array($result)):?>
                <th scope="row"><?php echo $row['title'] ?></th>
                <td><?php echo $row['groupcode']?></td>    
                    <form method="POST" action="view_proposalinfo.php">
                                    <td><input class="btn btn-outline-dark" type="submit" name="view" value="VIEW"></td>
                                    <input type="hidden" name="groupcode" value=<?php echo $row['groupcode']?>>
                    </form>
                </tr>
                </tbody>
                <?php endwhile;?>
</table>
            </div>
          </div>


  
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