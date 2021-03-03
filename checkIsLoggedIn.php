<?php
    session_start();
    echo "Your Email address is " . $_SESSION['email'];
    if (!isset($_SESSION['email'])) {
      echo "<script> location.href='loginForm.php'; </script>";
      exit;
    }
