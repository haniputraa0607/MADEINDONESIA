<?php
  @session_start();
  include_once('database.php');
  $con->logout();
  header('Location: formlogin.php');
?>