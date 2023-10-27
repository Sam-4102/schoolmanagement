<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>LOGIN FORM </title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>

<body background="edu.jpg">


  <center>
    <div class="login_deg">
      <center class="title_deg">LOGIN FORM 

      <h4>
         <?php
          
          error_reporting(0);
          session_start();
          session_destroy();

          echo $_SESSION['loginMessage'];

         ?>
    </h4>
      </center>


        <form class="loginform_deg" action="login_check.php" method="POST">
            <div>
                <label class="label_deg" > Username </label>
                    <input type="text" name="username">
            </div>
            <div>
                <label class="label_deg"> Password </label>
                    <input type="password" name="password">
            </div>
            <div class=>
             
                    <input type="submit" name="sumbmit" value="login"  class="btn btn-primary">
            </div>
            
</form>
</div>
</center>

</body>
</html>