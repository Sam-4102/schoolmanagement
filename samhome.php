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


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin's Dashboard</title>
    <link rel="stylesheet" type="text/css" href="sam.css">
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
   <h1> Admin here</h1>
   <p> WELCOME TO ADMIN PAGE 

   Here you can get detials about the teachers , 
   students and courses and can also make changes into them.
</p>
</div>

</body>
</html>