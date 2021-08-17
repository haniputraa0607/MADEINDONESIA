<?php 
  class User
  {
      private $db;
      function __construct($db)
      {
          $this->db = $db;
      }
      
      function login($user, $pass)
      {
          $result = $this->db->query("SELECT * FROM user WHERE username = '" . $user. "' and password = '" . $pass . "'");
          if ($result->num_rows > 0)
          {
              @session_start();
              $row = $result->fetch_assoc();
              $_SESSION['user_id'] = $row['id'];
              $_SESSION['user_name'] = $row['username'];
              return true;
          }
          else
          {
              return false;
          }
  
      }
      function logout()
      {
          session_destroy();
          unset($_SESSION['user_id']);
          unset($_SESSION['user_name']);
          return;
      }
      
      function escapeString($str) {
          return $this->db->real_escape_string($str);
      }
  }

?>