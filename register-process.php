<?php
    session_start();
    $error = '';
    if (isset($_POST['register'])) {

            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $gender = $_POST['gender'];
            $email_id = $_POST['email_id'];
            $address = $_POST['address'];
            $contact_number = $_POST['contact_number'];
            $date_of_birth = $_POST['date_of_birth'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $conn = mysqli_connect("localhost", "root", "", "tourismzilla");

            $query = "INSERT INTO registerform  VALUES('$first_name', '$last_name', '$gender', '$email_id', '$address', '$contact_number', '$date_of_birth', '$username', '$password')";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if($result) {
                $message = "Successfully registered, proceed to login!";
                echo "<script type='text/javascript'>
                alert('$message');
                  window.location.replace('login.php');
                </script>";

            }
            else {
                $message = "Something went wrong, please try registering again!";
                echo "<script type='text/javascript'>alert('$message');</script>";
                header("location: register.html");
            }
            mysqli_close($conn);

    }
?>
