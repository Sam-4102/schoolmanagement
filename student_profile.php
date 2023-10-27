
<?php

session_start();

if(!isset ( $_SESSION['username']))
{
    header("location:login.php");
}

elseif($_SESSION['usertype']=='sam')
{
    header("location:login.php");
}

$host="localhost";
$user="root";
$password="";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);

$name= $_SESSION['username'];

$sql="SELECT * FROM user WHERE username='name' ";

$result=mysqli_query($data,$sql);

$info=mysqli_fetch_assoc($result);


if(isset($_POST['update_profile']))
{
    $s_email=$_POST['email'];
    $s_phone=$_POST['phone'];
    $s_password=$_POST['password'];

    $sql2="UPDATE user SET email='$s_email', phone=' $s_phone', 
    password='$s_password' WHERE username='$name'  ";

    $result2=mysqli_query($data,$sql2);

    if($result2)
    {
       header('location:student_profile.php');
    }

}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Student Dashboard</title>

      
    <?php
                
                include'studentcss.php'
                


          ?>

       <style type="text/css">
          
          label{
            display: inline-block;
            text-align: right;
            width:100px;
            padding-top: 10px;
            padding-bottom:10px;
          }

          .div_deg{
             background-color: plum;
             width: 500px;
             height: inherit;
             padding-top: 70px;
             padding-bottom: 70px;
          }

        </style>


<link rel="stylesheet" type="text/css" href="sam.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>



</head>

<body>
     
        <?php
                
                include'student_sidebar.php'

          ?>
         
         <center>
          <div class="content">
            <h1> Update Profile </h1>
            <br></br>
            
            <form action="#" method="POST">
            <div class="div_deg">

                <div>
                    <label> Name </label>
                    <input type="text" name="name" 
                    value="<?php echo"Pooja" ?>">
                </div>
                <div>
                    <label> Email </label>
                    <input type="text" name="email"
                    value="<?php echo"pooja@gmail.com" ?>">
                </div>
                <div>
                    <label> Phone </label>
                    <input type="number" name="phone"
                    value="<?php echo"34324757" ?>">
                </div>
                <div>
                <label> Course </label>
                    <input type="number" name="course"
                    value="<?php echo"Graphic" ?>">
                </div>
                <div>
                    <label> Password </label>
                    <input type="text" name="password"
                    value="<?php echo"123" ?>">
                </div>
                <div>
                    <input type="submit" name="update_profile" value="Update" 
                    class="btn btn-primary">
                </div>
                
                </div>
            
            </form>
          </div>
        </center>
          
 



</body>
</html>