<?php 
session_start();
session_destroy();

if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
    $email = $_COOKIE['email'];
    $password = $_COOKIE['password'];
    setcookie("email", "", time()-3600);
    setcookie("password", "", time()-3600);
  };

  echo "You Successfully logout loging <a href='loginForm.php'>here</a>";
