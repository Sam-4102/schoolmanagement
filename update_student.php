<?php

session_start();

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

$id=$_GET['student_id'];
$sql="SELECT * FROM user WHERE  id='$id' ";

$result=mysqli_query($data,$sql);

$info=$result->fetch_assoc();


if(isset($_POST['update']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$POST['password'];

    $query="UPDATE user SET username='$name',
    email='$email',phone='$phone',password='$password' 
    WHERE id='$id' ";

    $result2=mysqli_query($data,$query);

    if($result2)
    {
        header("location:view_student.php") ;
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sam Dashboard</title>

    <?php
         include 'admissioncss.php'
    ?>

   <style type="text/css">
        
        label
        {
            display: inline-block;
            width: 100px;
            text-align: right;
            padding-top: 10px;
            padding-bottom: 10px;

        }

        .div_deg
        {
            background-color: plum;
            width: 400px;
            padding-bottom: 70px;
            padding-top: 70px;
        }


   </style>


</head>
<body>
     <header class="header">
     <a href=""> Sam Dashboard </a>

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
        <a href=""> Add Teachers</a>
    </li>

    <li>
        <a href=""> View Teachers</a>
    </li>

    <li>
        <a href=""> Add Courses</a>
    </li>

    <li>
        <a href="">View Courses </a>
    </li>

    
</ul>
    

</aside>

<div class="content">
<center>
   <h1> Update Student</h1>
  
  <div class="div_deg">
    <formn action="#" method="POST">
       <div>
           <label>Username </label>
           <input type="text" name="name"
           value="<?php   echo"{$info['username']}"?>">
       </div>
       <div>
           <label>Email </label>
           <input type="email" name="email"
           value="<?php   echo"{$info['email']}"?>">
       </div>
       <div>
           <label>Phone </label>
           <input type="number" name="phone"
           value="<?php   echo"{$info['phone']}"?>">
       </div>
       <div>
           <label>Password </label>
           <input type="text" name="password"
           value="<?php   echo"{$info['password']}"?>">
       </div>
       <div>
        
           <input  class="btn btn-default"type="submit"
            name="update" value="Update">
       </div>
    </from>
    </center>
  </div>
</div>

</body>
</html>