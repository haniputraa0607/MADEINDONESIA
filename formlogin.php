<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login MadeIndonesia</title>
    <style>
      .error {
        background-color: #F2DEDE;
      }
    </style>
  </head>
  <body>
    <h3>LOGIN</h3>
    <form action="" method="post" id="login-form">
      <table>
        <div id="err-msg" name="err-msg"></div>
        <tr>
          <td>Username</td>
          <td>:</td>
          <td><input type="text" name="username" id="username" /></td>
        </tr>
        <tr>
          <td>Password</td>
          <td>:</td>
          <td><input type="password" name="password" id="password" /></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><input type="submit" name="login" value="Sign in" id="login" /></td>
        </tr>
      </table>
    </form>

    <!-- Scipt -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
