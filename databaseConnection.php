<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "phpLogingSystem";

$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS phpLogingSystem";
if (!mysqli_query($conn, $sql)) {
    echo "Error creating database: " . mysqli_error($conn);
} else {
    //echo "Database created successfully";
}

$conn->select_db('phpLogingSystem');
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    pass VARCHAR(30) NOT NULL
    )";
    
    if (!mysqli_query($conn, $sql)) {
      echo "Error creating table: " . mysqli_error($conn);
    } else {
        //echo "Table users created successfully";      
    }    
    mysqli_close($conn);
