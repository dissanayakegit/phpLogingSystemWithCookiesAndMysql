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
    <h2>Registration page</h2>
    <br>
    <?php
    require_once('databaseConnection.php');
    ?>

    <p>already have a account?<a href="loginForm.php">Login here</a></p>

    <form action="createNewUser.php" method="POST">
      <div class="form-group">
        <label for="exampleInputEmail1">User Name</label>
        <input type="text" class="form-control" name="u_name" placeholder="Enter user name">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="email" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
      </div>
      <br>
      <input type="submit" class="btn btn-primary" value="Register" name="sub">
    </form>
  </div>
  </form>

</html>