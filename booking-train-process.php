<?php

    include('train1.php');

    $train_id = $_SESSION["train_id"];
    $train_name = $_SESSION["train_name"];
    $departure = $_SESSION["departure"];
    $arrival = $_SESSION["arrival"];
    $price = $_SESSION["price"];
    $date_of_journey = $_SESSION["date_of_journey"];
    $from_loc = $_SESSION["from_loc"];
    $to_loc = $_SESSION["to_loc"];

    $conn = mysqli_connect("localhost", "root", "", "tourismzilla");
?>

<?php
    $error = '';
    if (isset($_POST['continue'])) {

            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $gender = $_POST['gender'];
            $mobile_no = $_POST['mobile_no'];
            $email_id = $_POST['email_id'];
            $date_of_birth = $_POST['date_of_birth'];
            $no_of_travellers = $_POST['no_of_travellers'];
            $class = $_POST['class'];

            $conn = mysqli_connect("localhost", "root", "", "tourismzilla");

            $query = "INSERT INTO `trainbooking2` values ('$first_name', '$last_name', '$gender', '$mobile_no', '$email_id', '$date_of_birth', '$date_of_journey', '  $from_loc', '$to_loc', '$no_of_travellers', '$class');";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if($result) {
                $message = "Successfully registered!!!";
                echo "<script type='text/javascript'>
                alert('$message');
                  window.location.replace('train4.php');
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
