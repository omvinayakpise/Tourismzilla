<?php
    include('session.php'); // Includes Login Script
    if(!isset($_SESSION['login_user'])){
        header("location: login.php"); // Redirecting To Profile Page
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Customer ID</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="C:\xampp\htdocs\Project\images\favicon.ico">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="css/idpage.css">

    <!-- Google Fonts Link -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Ubuntu:400,700&display=swap" rel="stylesheet">

    <!-- Bootstrap Scripts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <h1>Tourismzilla</h1>
      <h4>Welcome <span><?php echo $login_session ?></span> </h4>
      <a href="index.html"><button type="button" class="btn btn-outline-dark back-btn" name="button">Return to Home Page</button></a>
  </body>
</html>
