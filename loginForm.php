<!DOCTYPE html>
<html>

<head>
  <title>PHP Cookies based login system</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container">
    <br>
    <h2>Login page</h2>
    <br>
    <?php
    require_once('databaseConnection.php');
    ?>

    <p>haven't account yet? <a href="registration.php">Register here</a></p>

    <form action="loginController.php" method="POST">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="email" placeholder="Enter email" id="email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password" id="password">
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" name="rememberMe">
        <label class="form-check-label" for="exampleCheck1">Remember me</label>
      </div>
      <br>
      <input type="submit" class="btn btn-primary" value="Login" name="login">
    </form>
  </div>
  </form>

  <?php

  if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
    $email = $_COOKIE['email'];
    $password = $_COOKIE['password'];

    echo "<script>
      document.getElementById('email').value = '$email';
      document.getElementById('password').value = '$password';   
    </script>";
  };
  ?>

</html>