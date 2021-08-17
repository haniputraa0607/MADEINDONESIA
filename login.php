<?php
  include_once('database.php');
  if (isset($_POST['login']))
  {
      $user = $con->escapeString($_POST['username']);
      $pass = $con->escapeString($_POST['password']);
      echo $con->login($user, $pass);
  }
?>