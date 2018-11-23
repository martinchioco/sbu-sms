<?php
    session_start();
    $link = new mysqli('us-cdbr-iron-east-01.cleardb.net','bd7296d2ac0eff','4b840f06','heroku_a71bbafdab8fcb3');
    $projno = $_POST['projno'];
        $qry = "SELECT * FROM projects where projno = '$projno'";
        $qry2 = "SELECT * FROM projinfo where projno = '$projno'";
        $result2 = mysqli_query($link, $qry2);
        $result = mysqli_query($link,$qry);
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
        
 <!-- login modal popup -->
 <link rel="stylesheet" type="text/css" href="modal.css">
        <button class="btn btn-outline-light" onclick="document.getElementById('modal-wrapper').style.display='block'">Login</button>
        <div id="modal-wrapper" class="modal">
        <form class="modal-content animate" method="POST" action="login.php">
        <div class="imgcontainer">
        <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
        <img src="img/bits.jpg" alt="Avatar" class="avatar">
        <h1 style="text-align:center">Please type in your account details</h1></div>
        <div class="container">
                                <input type="text" name="user" placeholder="Enter Username.." required>
                                <input type="password" name="pass" placeholder="Enter Password.." required>      
                                <input type="submit" class="btn btn-dark center" value="Login Account" style=" color: white;padding: 14px 20px;margin: 8px 26px;border: none;cursor: pointer;width: 90%;font-size:20px;">
        </form>
        </div>
        </form>
        </div>
        <scrIpt>
        // If user clicks anywhere outside of the modal, Modal will close
        var modal = document.getElementById('modal-wrapper');
        window.onclick = function(event) {
        if (event.target == modal) {
        modal.style.display = "none";
        }
        }
        </script>



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
<input class="btn btn-outline-light" type="submit" name="search" value="Search">
</form>
</div>
</nav>  


<br><br><br>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">
                  <span data-feather="home"></span>
                  Projects <span class="sr-only">(current)</span>
                </a>
            </ul>
          </div>
        </nav>

     
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <?php while($row = mysqli_fetch_array($result)):?>
          <h1><?php while($row2 = mysqli_fetch_array($result2)):?><?php echo $row['Title'] ?></h1>
       
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
              </div>

            </div>
          </div>
          

                               
                    <table>
                    <p class="lead">
                    <h3>Abstract: </h3><?php echo $row2['abstract']?>
                    <br><br>
                    <h3>Objectives of the Study: </h3> <?php echo $row2['objectives']?>
                    <br><br>
                    <h3>Scope of the Study: </h3> <?php echo $row2['scope']?>
                    <br><br>
                    <h3>Purpose of the Study: </h3> <?php echo $row2['purpose']?>
                    </p>
                    <?php endwhile; endwhile; ?>
                    </table>




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