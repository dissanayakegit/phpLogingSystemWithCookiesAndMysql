<?php

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$isRememberSet = $_REQUEST['rememberMe'];

if (isset($_POST['login'])) {
    $conn = mysqli_connect("localhost", "root", "123", "phpLogingSystem");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "select * from users where email='" . $email . "' and pass ='" . $password . "'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_assoc()) {
            $dbEmail = $row["email"];
            $dbPassword = $row["pass"];
            if ($dbEmail == $email &&  $dbPassword == $password) { 

                if ($isRememberSet == 'on') {
                    setcookie('email', $email, time() + (86400 * 30)); // 86400 = 1 day
                    setcookie('password', $password, time() + (86400 * 30));
                }

                session_start();
                $_SESSION['email'] = $dbEmail;
                echo "<script> location.href='welcome.php'; </script>";
                exit;
            }else{
                echo "<script> location.href='logingForm.php'; </script>";
                exit;
            }
        }
    } else {
        echo "Invalid credentials.";
    }
} else {
    echo "<script> location.href='loginForm.php'; </script>";
}
