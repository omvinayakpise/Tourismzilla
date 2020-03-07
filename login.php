<?php
    include('login-process.php'); // Includes Login Script
    if(isset($_SESSION['login_user'])){
        header("location: welcome.php"); // Redirecting To Profile Page
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="shortcut icon" href="images\favicon.ico">
    <link rel="stylesheet" href="css/login.css">

    <!-- Bootstrap Scripts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu&display=swap" rel="stylesheet">

  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 leftcol">
          <img class="login-img" src="https://i.pinimg.com/originals/27/af/3b/27af3b2dacb88a23a34f9c21429168c4.jpg" alt="login-photo">
          <h1>Tourismzilla Login Page</h1>
          <h5><em>You are just one click from your <span>Dream Destination</span></em></h5>
        </div>
        <div class="<col-lg-6 rightcol>">
          <form class="login-form" action="login-process.php" method="post">
            <label>Username</label>
            <input type="text" class="form-control-lg" name="username" placeholder="Enter your Username" required>
            <br>
            <br>
            <label>Password</label>
            <br>
            <input type="password" class="form-control-lg" name="password" placeholder="Enter your Password" required>
            <br>
            <br>
            <button type="submit" class="btn btn-primary btn-lg" name="login" value="submit">Login</button>
            <a href="register.html"><button type="button" class="btn btn-secondary btn-lg" name="button">Register</button></a>

          </form>

        </div>
      </div>

    </div>

  </body>
</html>
