<?php
    session_start();
    $error = '';
    if (isset($_POST['search'])) {

            $_SESSION["destination"] =$_POST['destination'];
            $_SESSION["check_in"] = $_POST['check_in'];
            $_SESSION["check_out"] = $_POST['check_out'];

            // $conn = mysqli_connect("localhost", "root", "", "tourismzilla");
            //
            // $query = "INSERT INTO hotelbooking2(destination, check_in, check_out) VALUES('$destination', '$check_in', '$check_out')";
            // $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            // if($result) {
                $message = "Search Successfull!!!";
                echo "<script type='text/javascript'>
                alert('$message');
                  window.location.replace('hotel1.php');
                </script>";

            // }
            // else {
            //     $message = "Something went wrong, please try searching again!";
            //     echo "<script type='text/javascript'>alert('$message');</script>";
            //     header("location: hotel.html");
            // }
            // mysqli_close($conn);
            //


    }
?>
