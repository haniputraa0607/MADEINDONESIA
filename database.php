<?php
  $hostname = 'localhost';
  $username = 'root';
  $password = 12345678;
  $database = 'madeindonesia';

  $db = new mysqli($hostname, $username, $password, $database);
  if($db->connect_errno){
    die('Error ' . $this->db->connect_error);
  }
  include_once('user.php');
  $con = new User($a);
?>