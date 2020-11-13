<!DOCTYPE html>
<html lang="en">
<head>
  <title>Transaction History</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href = "index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
  <div class="container">
    <?php
        $conn = mysqli_connect('localhost','root','root');
        $query = 'SELECT * FROM sparks.records';
        $result = mysqli_query($conn,$query);
        echo '<table  class="table table-dark table-hover  text-center"><tr><th>Sender</th><th>Receiver</th><th>Credits</th></tr>';
        while($row = mysqli_fetch_array($result)) {
        echo "<tr><td>".$row['sender']."</td><td>".$row['receiver']."</td><td>".$row['credits']."</td></tr>";
        }
        echo "</table>";
    ?>
    <div class="d-flex justify-content-center">
    <a href="bankhomepage.php" class="btn btn-lg ml-3 mb-3" style="background-color: #ADD8E6;" role="button"><i class="fa fa-close"></i>  Home  </a>
    </div>
    </div>
</body>