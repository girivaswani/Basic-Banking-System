<!DOCTYPE html>
<html lang="en">
<head>
  <title>Basic Banking System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="index.css ">
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
  <form  action="userdetail.php" method="post">
        <div class="view">
          <div class="container">
            <!-- <br>
            <br> -->
            
            <!-- <div class="page-header">
              <h1 style="margin-top: 30px"><b><center>User information</center></b></h1>      
            </div> -->

            <!-- fetch and display data from MySQL -->
            <?php
              $conn = mysqli_connect('localhost','root','root');
              $query = 'SELECT * FROM sparks.users';
              $result = mysqli_query($conn,$query);
              echo '<table  class="table table-dark table-hover  text-center"><tr><th>Name</th><th>Email</th><th>Balance</th></tr>';
              while($row = mysqli_fetch_array($result)) {
                echo "<tr><td> ".$row['u_name']."</td><td>".$row['u_email']."</td><td>".$row['u_credits']."</td></tr>";
              }
              echo "</table>";
            ?>
            <div class="view">
            <table cellspacing=50px style="position: relative; left: 40%;">
              <tr>
                  <td> <h2>Select User</h2></td>
            <td>
              <select name="name" id = "uname">
                  <option value="Select">-Select-</option>
              
                  <option value="Girish Vaswani"> Girish Vaswani</option>

                  <option value="Aditya Sharma"> Aditya Sharma</option>

                  <option value="Monish Shah"> Monish Shah</option>

                  <option value="Rohan Singh"> Rohan Singh</option>

                  <option value="Manisha Pawar"> Manisha Pawar</option>

                  <option value="Simran Pamnani"> Simran Pamnani</option>

                  <option value="Jash Pahuja"> Jash Pahuja</option>

                  <option value="Dhiren Hazari"> Dhiren Hazari</option>

                  <option value="Khushi Mohnani"> Khushi Mohnani</option>

                  <option value="Aayushi Ved"> Aayushi Ved</option>
              
                    </select>
                  </td>
                </tr>
                  <tr>
                      <td></td>
                </tr>
                    </table>
              </div>
            </div>
          </div>
          <br>
          <div class="text-center">
            <button class="btn btn-lg mr-3 mb-3" style="background-color: #ADD8E6;" onclick="checkselectser()" type="submit" >Submit</button>
            <a href="bankhomepage.php" class="btn btn-lg ml-3 mb-3" style="background-color: #ADD8E6;" role="button"><i class="fa fa-close"></i>  Back  </a>
        </div>
  </form>
  <script>
    function checkselectser(){
      
      {
        if(document.getElementById("uname").value=="Select"){
          alert("Please select user to view details!");
          window.location.href = 'selectuser.php';
        }
      }
    }
  </script>    
</body>
</html>
