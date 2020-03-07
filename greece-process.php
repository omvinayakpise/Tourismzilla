<?php
    session_start();
    $error = '';
    if (isset($_POST['continue'])) {

            $adults = $_POST['adults'];
            $child = $_POST['child'];
            $infants = $_POST['infants'];
            $room_selection = $_POST['room_selection'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $gender = $_POST['gender'];
            $mobile_no = $_POST['mobile_no'];
            $email_id = $_POST['email_id'];
            $date_of_birth = $_POST['date_of_birth'];
            $passport_no = $_POST['passport_no'];

            $conn = mysqli_connect("localhost", "root", "", "tourismzilla");

            $query = "INSERT INTO greecebooking  VALUES('$adults', '$child', '$infants', '$room_selection', '$first_name', '$last_name', '$gender', '$mobile_no', '$email_id', '$date_of_birth', '$passport_no')";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if($result) {
                $message = "Successfully registered!!!";
                echo "<script type='text/javascript'>
                alert('$message');
                  window.location.replace('greece2.html');
                </script>";

            }
            else {
                $message = "Something went wrong, please try registering again!";
                echo "<script type='text/javascript'>alert('$message');</script>";
                header("location: greece.html");
            }
            mysqli_close($conn);

    }
?>
