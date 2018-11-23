<?php
    session_start();
    $link = new mysqli('us-cdbr-iron-east-01.cleardb.net','bd7296d2ac0eff','4b840f06','heroku_a71bbafdab8fcb3');
    if(isset($_POST['search'])){
        $search = $_POST['searchit'];
        $qry = "SELECT * FROM acc_info WHERE CONCAT (account_id,user,acctype,adviser) LIKE '%".$search."%'";
       $result = mysqli_query($link,$qry);
    }
    else{
        $qry = "SELECT * FROM acc_info";
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

<form class="form-inline my-2 my-lg-0" method="POST" action="manageaccounts.php">
<input class="form-control mr-sm-2" type="text" ria-label="Search" name="searchit" placeholder="Search..">
<input class="btn btn-outline-light" type="submit" name="search" value="Search">
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
            <h1 class="h2">San Beda University Online SAD Management System</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
              </div>

            </div>
          </div>


            <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Username</th>
                <th scope="col">Account type</th>
                <th scope="col">Contact No.</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php while($row = mysqli_fetch_array($result)):?>
                <td><?php echo $row['user']?></td>
                <td><?php echo $row['acctype']?></td>
                <td><?php echo $row['contact']?></td>
                <form method="POST" action="updateaccounts.php">
                            <input type="hidden" name="account_id" value=<?php echo $row['account_id']?>>
                            <td><input class="btn btn-outline-dark" type="submit" name="update" value="UPDATE"> </td>
                </form>
                <form method="POST" action="deleteaccounts.php">
                            <input type="hidden" name="account_id" value=<?php echo $row['account_id']?>>
                            <td><input class="btn btn-outline-dark" type="submit" name="delete" value="DELETE"> </td>
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