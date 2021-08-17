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
          $query = "SELECT * FROM user WHERE username like '$user' AND password like '$pass'";
          $result = mysqli_query($this->db,$query);
          if ($result->num_rows > 0)
          {
              @session_start();
              $row = $result->fetch_assoc();
              $_SESSION['user_id'] = $row['id_user'];
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