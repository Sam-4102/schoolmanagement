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

   $sql="SELECT * FROM user WHERE usertype='student'";
   $result=mysqli_query($data,$sql);


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin's Dashboard</title>

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

<?php
  
    include 'admin_sidebar.php';


?>
<div class="content">
<center>

   <h1> Student Data</h1>

   <?php
      if($_SESSION['message']);
      {
        echo $_SESSION['message'];
      }

      unset ($_SESSION['message']);
   ?>

   <br> </br>

   <table border="1px">
        <tr>
          <th class="table_th">Username </th>
          <th class="table_th">Email </th>
          <th class="table_th">Phone </th>
          <th class="table_th"> Password</th>
          <th class="table_th"> Delete</th>
          <th class="table_th"> Update</th>

        </tr>

        <?php

         while($info=$result->fetch_assoc())
         {

         
        ?>
        <tr>
            <td class="table_td">
            <?php echo "{$info['username']}";    ?>
            </td>
            <td class="table_td">
            <?php echo "{$info['email']}";    ?>
            </td>
            <td class="table_td">  
            <?php echo "{$info['phone']}";    ?>
            </td>
            
            <td class="table_td"> 
            <?php echo "{$info['password']}";    ?>
            </td>

            <td class="table_td"> 
            <?php echo "<a onClick=\" javascript:return confirm
            ('Are you sure to delete this'); \"
             href='delete.php?student_id=
            {$info['id']}'> Delete </a>";    ?>
            </td>


            <td class="table_td"> 
            <?php echo "<a   href='update_student.php?student_id=
            {$info['id']}'>
             Update</a>";    ?>
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