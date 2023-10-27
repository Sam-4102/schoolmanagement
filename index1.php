<?php

error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
    $message=$_SESSION['message'];

    echo "<script type='text/javascript'>
    alert('message');
    
    </script>";
    
}

$host="localhost";
$user="root";
$password="";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);


$sql="SELECT * FROM teacher";

$result=mysqli_query($data,$sql);


$host="localhost";
$user="root";
$password="";
$db="schoolproject";

$data2=mysqli_connect($host,$user,$password,$db);


$sql2="SELECT * FROM courses";

$result2=mysqli_query($data2,$sql2);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Student Management System</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<body> 
   <nav>
  <label class="logo"><b><u> HOPE SCHOOL </u> </b> </label>
   <ul>
    <li><a href=" ">Home   </a></li>
    <li><a href="contact.php">Contact   </a></li>
    <li><a href=" ">Admission   </a></li>
    <li><a href="login.php " class="btn btn-default">Login   </a></li>
   </nav>
</body>
</html>

<div class="section1">
  

<img class="main_img" src="school.jpg">
</div>

<div class="container">
    <div class="col">
        <div class="col-md-4"> 
           <img class="welcome_img" src="classroom.jpg">      
</div>
<div class="col-md-8"> 
    <h1> Welcome to Hope School </h1>
    <p></p>
</div>
</div>
</div>

<center class="ttext">
    <h1> <u>Our Teachers</h1>
</center>
<div class="container">
    <div class="row">

      <?php
           
           while($info=$result->fetch_assoc())

            {

        ?>

        <div class="col-md-4">
            <img class="teacher" src="t1.jpg">

            <h3><?php echo "{$info['name']}" ?></h3>

        <h5><?php echo "{$info['description']}" ?></h5>

           
</div> 
     

<div class="col-md-4"> 
        <img class="teacher" src="t2.jpg">
        <p> <b>SANJAY MAHAJAN</b><br>
            Expert web developer, 
            with enhacing skills.
</p>
        
        </div>
        
        <div class="col-md-4"> 
        <img class="teacher" src="t3.jpg">
        <p> <b>SHEETAL PATIL</b><br>
            Best artist , highly expirenced 
            worked in IGT.
</p>
        
        </div>
        <?php
            }
            ?>
</div>
</div>






<center class="ctext">
    <h1> <u>Our Courses</h1>
</center>
<div class="container">
    <div class="col">
    <?php
           
           while($info2=$result2->fetch_assoc())

            {

        ?>
        <div class="col-md-4">
            <img class="course" src="marketing.jpg">  
              <h3>Marketing </h3>
            <p> Grow up your marketing skills and take a step 
                towarsds finance world. 
</p>
</div> 
        <div class="col-md-4"> 
        <img class="course" src="graphic.jpg">
        <h3> Graphic</h3>
        <p> Let your judgements build up this world.
            This course will enhance all your graphics skills. 
</p>
        </div>

        
        <div class="col-md-4"> 
        <img class="course" src="art.jpg"> 
          <h3> Art </h3>
        <p> Bring out your creativity and fill your colours 
            to the world!!!EXPLORE,LEARN AND  CREATE!!
</p>
        </div>
        <?php
            }
            ?>
</div>
</div>


<center> <h1 class="adm"> Admission Form </h1>
</center>
<div class="admission_form" align="center">
    <form action="data_check.php" method="POST">
        <div class="form_deg">
            <label class="label_text"> Name </label>
            <input class="input_deg" type="text" name="name">
</div>

<div class="form_deg">
            <label class="label_text"> Email</label>
            <input class="input_deg" type="text" name="email">
</div>

<div class="form_deg">
            <label class=" label_text"> Phone </label>
            <input class="input_deg" type="text" name="phone">
</div>


<div class="form_deg">
            <label class=" label_text"> Course </label>
            <input class="input_deg" type="text" name="course">
</div>

<div class="form_deg">
            <label class=" label_text"> Message</label>
           <textarea class="msg" name="message"></textarea>
</div>

<div class="form_deg">
           
            <input class="btn btn-primary" type="submit" id="submit" name="sumit" >
</div>

</form>
     </div>


     <footer>
        <h4 class="footer_text">NOT ONLY KNOWLEGDE BUT VALUES ARE IMBIDED IN EVERY CHILD </h4>
</footer>

</body>
</html>