<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userdetail</title>
    <link rel="stylesheet" type="text/css" href = "index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <style>
        body{
            background-color: #008B8B;
        }
    </style> 
</head>
<body>
<nav class="navbar navbar-expand-lg nav-light">
  <a class="navbar-brand" href="bankhomepage.php"><img width="80px" height="75px" src="https://www.sparksfoundation.org/wp-content/uploads/2017/12/nocrop-1.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="largecontent nav-link " href="bankhomepage.php"><strong style="position: absolute;left: 14rem;top: 2rem;font-size: 2.1rem;">Sparks Foundation</strong><span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<form action="transfer.php" method="POST">
    <div class="container">
<?php
if($_SERVER["REQUEST_METHOD"]=='POST'){
    $name = $_POST['name'];
    if ($name=="Select"){
        echo "<script> window.location.href = 'selectuser.php'; </script>";
    }
    session_start();
    $_SESSION["name"] = $name;
    $conn = mysqli_connect('localhost','root','root');
    $query = 'SELECT  * FROM sparks.users  WHERE u_name = "' . $name . '" ';
    $result = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($result)) {
    //    echo "<h1>User Details</h1><br>";
       echo '<table  class="table table-dark table-hover  text-center"><tr><th>Name</th><th>Email</th><th>Balance</th><th>Contact</th></tr>';
       echo "<tr><td> ".$row['u_name']."</td><td>".$row['u_email']."</td><td>".$row['u_credits']."</td><td>".$row['u_contact']."</td></tr></table>";
    }
}
?>
<br>
<div class="text-center">
    <a href="bankhomepage.php" class="btn btn-lg mr-5" style="background-color: #ADD8E6;" role="button"><i class="fa fa-close"></i>Home</a>
    <a href="transfer.php" class="btn btn-lg mr-5 ml-5" style="background-color: #ADD8E6;" role="button"><i class="fa fa-close"></i>  Transfer to </a>
    <a href="selectuser.php" class="btn btn-lg ml-5" style="background-color: #ADD8E6;" role="button"><i class="fa fa-close"></i>  Back  </a>
</div>
</div>
</form>  	
</body>
</html>
