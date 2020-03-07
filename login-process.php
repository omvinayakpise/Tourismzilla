<?php
    session_start();
    $error = '';
    if (isset($_POST['login'])) {
        if (empty($_POST['username']) || empty($_POST['password'])) {
            $error = "Email or Password is invalid";
        }
        else{
            $username = $_POST['username'];
            $password = $_POST['password'];

            $conn = mysqli_connect("localhost", "root", "", "tourismzilla");

            $query = "SELECT username, password from registerform where username=? AND password=? LIMIT 1";

            $stmt = $conn->prepare($query);
            $stmt->bind_param("ss", $username, $password);
            $stmt->execute();
            $stmt->bind_result($username, $password);
            $stmt->store_result();
            if($stmt->fetch()) {
                $_SESSION['login_user'] = $username;
                header("location: welcome.php");
            }
            else {
                $message = "Incorrect Email or Password!";
                echo "<script type='text/javascript'>alert('$message');</script>";

            }
        }
        mysqli_close($conn);
    }
?>
