<?php
session_start();
  include("bd/mysql.php");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>

    <div class="login-page">
      <h1 class="text-center">Login Page</h1>
      <div class="form">
        <form class="login-form" method="post" action="">
          <input type="text" placeholder="usuario" name="admin_name"/>
          <input type="password" placeholder="password" name="admin_pass"/>
          <button name="admin_login" type="submit">login</button><br><br>


        </form>
        <a href="index.php"><button name="" class="btn btn-success">Página Inicial</button></a>
      </div>
    </div>
  </body>
</html>

<?php

  if (isset($_POST['admin_login'])) {
    # code...
    $admin_name = mysqli_real_escape_string($con , $_POST['admin_name']);
    $admin_pass = mysqli_real_escape_string($con , $_POST['admin_pass']);

    $sql = "select * from admins where admin_name='$admin_name' and admin_pass='$admin_pass'";

    $result = mysqli_query($con, $sql);

    $count = mysqli_num_rows($result);

    if ($count==1) {
      # code...
      $_SESSION['admin_name'] = $admin_name;
      echo "<script>alert('Log succsses')</script>";
      echo "<script>window.open('admin.php','_self')</script>";
    }
  }
 ?>
