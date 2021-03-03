<?php

$user_name = $_REQUEST['u_name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];


$conn = mysqli_connect("localhost", "root", "123", "phpLogingSystem");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "select * from users where email='".$email."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    $sql = "INSERT INTO users (user_name, email, pass)
    VALUES ('".$user_name."', '".$email."', '".$password."')";
    
    if (mysqli_query($conn, $sql)) {
        echo "User created successfully";
        echo "<script> location.href='welcome.php'; </script>";
        exit; 
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}else{
    echo "Entered email address already exist";
}
mysqli_close($conn);
