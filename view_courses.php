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

    $data2=mysqli_connect($host,$user,$password,$db);

   $sql2="SELECT * FROM courses";
   $result2=mysqli_query($data2,$sql2);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Adimin's Dashboard</title>
    <link rel="stylesheet" type="text/css" href="sam.css">
    <?php
         include 'admissioncss.php'
    ?>

    <style type="text/css">
          .table_th
   {
      padding: 20px;
      font-size:20px;
      background-color: plum;
   }

   
   .table_td
   {
      padding: 15px;
      font-size:20px;
   }


    </style>


</head>
<body>
     <header class="header">
     <a href=""> Admin's Dashboard </a>

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
    <center>
   <h1> View all Courses Data</h1>
 
   <table border="1px">
      <tr>
         <th class="table_th"> Course Name </th>
         <th class="table_th"> About Course </th>
         <th class="table_th"> Image </th>
      </tr>

      <?php
        while($info2=$result2->fetch_assoc())
        {
      ?>
      <tr>
          <td class="table_td"> <?php  echo"{$info2['name']}" ?> 
          </td>
          <td class="table_td"> <?php  echo"{$info2['description']}" ?> 
          </td>

          <td class="table_td">
            <img height="100px" width="100px" src="<?php  echo"{$info2['image']}" ?>">
             
          </td>
      </tr>

      <?php
        }
        ?>
   </table>

</center>
</div>
</body>
</html>