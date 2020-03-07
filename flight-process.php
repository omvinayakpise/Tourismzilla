<?php
    session_start();
    $error = '';
    if (isset($_POST['search'])) {

            $_SESSION["from_loc"] =$_POST['from_loc'];
            $_SESSION["to_loc"] = $_POST['to_loc'];
            $_SESSION["date_of_journey"] = $_POST['date_of_journey'];

            // $conn = mysqli_connect("localhost", "root", "", "tourismzilla");
            //
            // $query = "INSERT INTO flightbooking2(from_loc, to_loc, date_of_journey) VALUES('$from_loc', '$to_loc', '$date_of_journey')";
            // $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            // if($result) {
                $message = "Search Successfull!!!";
                echo "<script type='text/javascript'>
                alert('$message');
                  window.location.replace('flight1.php');
                </script>";

            // }
            // else {
            //     $message = "Something went wrong, please try searching again!";
            //     echo "<script type='text/javascript'>alert('$message');</script>";
            //     header("location: flight.html");
            // }
            // mysqli_close($conn);



    }
?>
