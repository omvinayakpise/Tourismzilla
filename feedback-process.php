<?php
    session_start();
    $error = '';
    if (isset($_POST['feedback'])) {

            $ques1 = $_POST['ques1'];
            $ques2 = $_POST['ques2'];
            $ques3 = $_POST['ques3'];
            $ques4 = $_POST['ques4'];
            $ques5 = $_POST['ques5'];

            $conn = mysqli_connect("localhost", "root", "", "tourismzilla");

            $query = "INSERT INTO feedbackform  VALUES('$ques1', '$ques2', '$ques3', '$ques4', '$ques5')";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if($result) {
                $message = "Thank You for your feedback";
                echo "<script type='text/javascript'>
                alert('$message');
                  window.location.replace('index.html');
                </script>";

            }
            else {
                $message = "Something went wrong, please try again!";
                echo "<script type='text/javascript'>alert('$message');</script>";
                header("location: feedBack.html");
            }
            mysqli_close($conn);

    }
?>
