<?php

session_start();
error_reporting(0);

if(!isset ( $_SESSION['username']))
{
    header("location:login.php");
}

elseif($_SESSION['usertype']=='student')
{
    header("location:login.php");
}

    $host="localhost";
    $user="root";
    $password="";
    $db="schoolproject";

    $data=mysqli_connect($host,$user,$password,$db);

    if(isset ( $_POST['add_student']))
   {
       $username=$_POST['name'];
       $user_email=$_POST['email'];
       $user_phone=$_POST['phone'];
       $user_password=$_POST['password'];
       $usertype="student";

       $sql="INSERT INTO user(
        username,email,phone,usertype,password) VALUES ('$username'
        ,'$user_email','$user_phone','$usertype','$user_password')";
        
        $result=mysqli_query($data,$sql);

        if($result)
        {
            echo"<script type='text/javascript'> 
            alert('Data Upload Success');
            
            </script>";
        }

        else
        {
            echo"Upload Failed";
        }
}



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <center>
    <title>Add Students</title>

    <style type="text/css">

        label
        {
            display:inline-block;
            text-align: right;
            width: 100px;
            padding-top:10px;
            padding-bottom:10px;

        }

        .div_deg
        {
            background-color: plum;
            width:400px; 
            padding-top: 70px;
            padding-bottom: 70px;
        }

    </style>

    <?php
         include 'admissioncss.php'
    ?>




</head>
<body>
     <header class="header">
     <a href=""> Admin's Dashboard</a>

     <div class="logout">

       <a href="login.php" class="btn btn-primary"> Logout </a>

    </div>
</header>

<aside>

<ul >
<li>

        <a href="admission.php"> Admission</a>
    </li>

    <li>
        <a href="add_student.php"> Add Students</a>
    </li>

    <li>
        <a href="view_student.php"> View Students</a>
    </li>

    <li>
        <a href="add_teacher.php"> Add Teachers</a>
    </li>

    <li>
        <a href="view_teacher.php"> View Teachers</a>
    </li>

    <li>
        <a href="add_courses.php"> Add Courses</a>
    </li>

    <li>
        <a href="view_courses.php">View Courses </a>
    </li>

    
</ul>
    

</aside>

<div class="content">
   <h1> <u>Add Students </u></h1>

   <div class="div_deg">

    <form action="#" method="POST">
       
   <div>
        <label> Username </label>
        <input type="text" name="name">
   </div>

   <div>
        <label> Email </label>
        <input type="email" name="email">
   </div>
   <div>
        <label> Phone </label>
        <input type="number" name="number">
   </div>
   <div>
        <label> Password </label>
        <input type="text" name="password">
   </div>
   <div>
       
        <input type="submit"  class="btn btn-primary" name="add_student" value="Add Student">
   </div>
    </form>
</div>
  
</div>

    </center>
</body>
</html>