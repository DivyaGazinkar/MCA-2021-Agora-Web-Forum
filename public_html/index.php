<?php
  session_start();
  if (isset($_SESSION['username'])&&$_SESSION['username']!=""){
    $username=$_SESSION['username'];
    $userid = $_SESSION['user_Id'];
  }
  else
  {
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Web-Forum</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<script>
function changeCat(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getposts.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
  
          <?php
              if (isset($_SESSION['username'])&&$_SESSION['username']!="")
              {
                echo '<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hello! '.$username.'</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="user_profile.php">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <!-- <div class="dropdown-divider"></div> -->
                  <a class="dropdown-item" href="logout.php">Log Out</a>
                </div>
              </li>';
              }
              else
              {
                echo '<li class="nav-item">
                <a class="nav-link" href="signup.php">Sign Up</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="signin.php">Sign In</a>
                </li>';
              }
            ?>
 


        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Forums :  Electronics</h1>

        <nav class="navbar navbar-expand-sm navbar-light">
            <div class="navbar-nav">
              <a class="nav-item nav-link active" value="0" onClick="changeCat(this.value)">All <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link"  onClick="changeCat(1)">Electronics</a>
              <a class="nav-item nav-link"  onClick="changeCat(2)">TV & Appliances</a>
              <a class="nav-item nav-link"  onClick="changeCat(3)">Men</a>
              <a class="nav-item nav-link"  onClick="changeCat(4)">Women</a>
              <a class="nav-item nav-link"  onClick="changeCat(5)">Baby & Kids</a>
              <a class="nav-item nav-link"  onClick="changeCat(6)">Home & Furniture</a>
              <a class="nav-item nav-link"  onClick="changeCat(7)">Sports & Books</a>
              <a class="nav-item nav-link"  onClick="changeCat(8)">Others</a>
              <a class="nav-item nav-link" href="#"></a>
            </div>
        </nav>

        <div class="d-flex bd-highlight mb-3">
            <div class="p-2 bd-highlight"></div>
            <div class="p-2 bd-highlight">
                <a class="btn btn-primary btn-info" href="new.php" role="button">+ New Topic</a>
            </div>
            <div class="ml-auto p-2 bd-highlight"></div>
          </div>

      </div>
    </div>

    <div class="container">
        
      <table class="table table-striped ">
        <thead>
          <tr>
            <th scope="col">Forum</th>
            <th scope="col">Category</th>
            <th scope="col">Posts</th>
            <th scope="col">Date/Time</th>
          </tr>
        </thead>
        <tbody id="txtHint">
          </tbody>
      </table>
    </div>

      <br><br><br>
      <footer>
 <center>
  <h6 class="footer">Footer<h6>
  </center>
      </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
