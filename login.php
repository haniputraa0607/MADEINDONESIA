<?php
  include_once('database.php');
  if (isset($_POST['login']))
  {
      $user = mysqli_real_escape_string($db,$_POST['username']);
      $pass = mysqli_real_escape_string($db,$_POST['password']);
      echo $con->login($user, $pass);
  }
?>