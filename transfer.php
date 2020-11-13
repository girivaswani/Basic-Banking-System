<!-- <!DOCTYPE html>
<html>
    <head>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
          <link rel="stylesheet" type="text/css" href = "index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Select user</title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
                background-color: #fff;
            }
  </style>
    </head> -->

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
         <div class="container">
        
           <div class="row" style="margin-top: 75px;">
            <div class="col-sm-3"></div>
              <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3 col-xs-offset-1 col-xs-10 col-xs-offset-1 column_style">
              <div class = "card" style="background-color: #343a40;">
              <div class="card-heading">
                  <br>
              <h2 class="ml-3"  style="color: #fff;">
                  Transfer Details
              </h2>
              </div>
                  <div class="card-body">
                  <form action="posttransfer.php" method="POST"> 
                        <div class='form-group'><label for='from' style="color: #fff;"><b>From :</b></label>
                        <select class='form-control' id='from' name='from'>
                           <option>Girish Vaswani</option><option>Aditya Sharma</option><option>Monish Shah</option><option>Rohan Singh</option><option>Manisha Pawar</option><option>Simran Pamnani</option><option>Jash Pahuja</option><option>Dhiren Hazari</option><option>Khushi Mohnani</option><option>Aayushi Ved</option></select>
                  </div>
                     <div class="form-group">
                      <label for="to"  style="color: #fff;"><b>To :</b></label>
                        <select class="form-control" id="to" name="to">
                          <option>Girish Vaswani</option><option>Aditya Sharma</option><option>Monish Shah</option><option>Rohan Singh</option><option>Manisha Pawar</option><option>Simran Pamnani</option><option>Jash Pahuja</option><option>Dhiren Hazari</option><option>Khushi Mohnani</option><option>Aayushi Ved</option></select>
                  </div>
                  <div class="form-group">
                      <label for="amt"  style="color: #fff;"><b>Enter amount to transfer :</b></label>
                      <input type="text" class="form-control" id="amt" pattern="^[0-9]*$" required="true" name="amt">
                  </div>
                  <div class="form-group">
                      <button type="submit" name="submit" class="btn" style="background-color: #ADD8E6;">Submit</button>
                  </div>   
                  </form>
                  </div>
                </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
            
        </div>  
    </body>
</html>
