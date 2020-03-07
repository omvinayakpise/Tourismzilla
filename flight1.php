<?php

    include('flight-process.php');
    $from_loc = $_SESSION["from_loc"];
    $to_loc = $_SESSION["to_loc"];

    $conn = mysqli_connect("localhost", "root", "", "tourismzilla");

    $query = "SELECT `flight_id`, `flight_name`, `departure`, `arrival`, `price` from flightbooking3 where `from_loc` = '$from_loc' and `to_loc` = '$to_loc'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Flight Booking</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images\favicon.ico">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="css/flight1.css">

    <!-- Font Awesome used to take icons from that site -->
    <script src="https://kit.fontawesome.com/dba538dfae.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu&display=swap" rel="stylesheet">

    <!-- Bootstrap Scripts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>

  <body>
    <h1 class="heading">Tourismzilla</h1>

    <div class="row">
      <div class="number-details col-lg-2 md-2">
        <h3 class="number-no">01</h3>
        <h5 class="no-details">Flights</h5>
        <hr>
      </div>

      <div class="number-details col-lg-2 md-2">
        <h3 class="number-no-2">02</h3>
        <h5 class="no-details-2">Guest Details</h5>
        <hr class="hr-2">
      </div>

      <div class="number-details col-lg-2 md-2">
        <h3 class="number-no-2">03</h3>
        <h5 class="no-details-2">Check-Out</h5>
        <hr class="hr-2">
      </div>
    </div>

    <h5 class="heading-2">Fly more with these flights</h5>

   <div class="row">
     <div class="flight-bar col-lg-2 md-2">
       <h3 class="flight-bar-item">Flight ID</h3>
     </div>

     <div class="flight-bar col-lg-2 md-2">
       <h3 class="flight-bar-item">Flight Name</h3>
     </div>

     <div class="flight-bar col-lg-2 md-2">
       <h3 class="flight-bar-item">Departure</h3>
     </div>

     <div class="flight-bar col-lg-2 md-2">
       <h3 class="flight-bar-item">Arrival</h3>
     </div>

     <div class="flight-bar col-lg-2 md-2">
       <h3 class="flight-bar-item">Price</h3>
     </div>
   </div>

   <?php
       while($rows=mysqli_fetch_assoc($result)){
   ?>

   <div class="row">
     <div class="flight-main col-lg-2 md-2">
       <h3 class="flight-main-item"><?php echo $rows['flight_id']; ?></h3>
     </div>

     <div class="flight-main col-lg-2 md-2">
       <h3 class="flight-main-item"><?php echo $rows['flight_name']; ?></h3>
     </div>

     <div class="flight-main col-lg-2 md-2">
       <h3 class="flight-main-item"><?php echo $rows['departure']; ?></h3>
     </div>

     <div class="flight-main col-lg-2 md-2">
       <h3 class="flight-main-item"><?php echo $rows['arrival']; ?></h3>
     </div>


     <div class="flight-main col-lg-2 md-2">
       <h3 class="flight-main-item"><?php echo $rows['price']; ?></h3>
     </div>

     <div class="col-lg-2 md-2">
      <a href="flight2.html"><button type="submit"
          class="btn bnt-lg btn-outline-dark"
          name="book">
          Book
        </button>
      </a>
     </div>
   </div>

<?php } ?>
              <footer id="footer">
                   <i class="social-icon fab fa-twitter fa-2x"></i>
                   <i class="social-icon fab fa-instagram fa-2x"></i>
                   <i class="social-icon fab fa-facebook-f fa-2x"></i>
                   <i class="social-icon fab fa-youtube fa-2x"></i>

                <p class="footer-text">© Copyright 2019 Tourismzilla</p>

              </footer>

  </body>
</html>

<!-- <script>
  handleSubmit = (flight_id, flight_name, departure, arrival, price) => {

  let phpDiv = <?php
      $_SESSION["flight_id"] = flight_id;
      echo $_SESSION["flight_id"];
      $_SESSION["flight_name"] = flight_name;
      $_SESSION["departure"] = departure;
      $_SESSION["arrival"] = arrival;
      $_SESSION["price"] = price;
    ?>

    document.getElementById("triggerPhp").innerHTML = phpDiv;
  }
</script> -->
