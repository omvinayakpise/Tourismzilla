<?php

    include('hotel1.php');

    $hotel_id = $_SESSION["hotel_id"];
    $hotel_name = $_SESSION["hotel_name"];
    $arrival = $_SESSION["arrival"];
    $ratings = $_SESSION["ratings"];
    $price = $_SESSION["price"];
    $destination = $_SESSION["destination"];
    $check_in = $_SESSION["check_in"];
    $check_out = $_SESSION["check_out"];

    $conn = mysqli_connect("localhost", "root", "", "tourismzilla");
?>

<?php
    session_start();
    $error = '';
    if (isset($_POST['continue'])) {

            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $gender = $_POST['gender'];
            $mobile_no = $_POST['mobile_no'];
            $email_id = $_POST['email_id'];
            $date_of_birth = $_POST['date_of_birth'];
            $no_of_guests = $_POST['no_of_guests'];
            $type_of_room = $_POST['type_of_room'];

            $conn = mysqli_connect("localhost", "root", "", "tourismzilla");

            $query = "INSERT INTO `hotelbooking2` values ('$first_name', '$last_name', '$gender', '$mobile_no', '$email_id', '$date_of_birth', '$destination', '$check_in', '$check_out', '$no_of_guests', '$type_of_room');";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if($result) {
                $message = "Successfully registered!!!";
                echo "<script type='text/javascript'>
                alert('$message');
                  window.location.replace('hotel4.php');
                </script>";

            }
            else {
                $message = "Something went wrong, please try registering again!";
                echo "<script type='text/javascript'>alert('$message');</script>";
                header("location: train2.html");
            }
            mysqli_close($conn);

    }
?>
