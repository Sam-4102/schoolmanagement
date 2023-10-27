<?php
 session_start();

 $host="localhost";
 $user="root";
 $password="";
 $db="schoolproject";

 $data=mysqli_connect($host,$user,$password,$db);


 if($_GET['student_id'])
 {
     $user_id=$_GET['student_id'];

     $query="DELETE * FROM user WHERE  id='$user_id' ";
   
     $result=mysqli_query($data, $query );
     echo($result);

     if($result)
      {
        $_SESSION['message']='Deleted Sucessfully';
        header("location:view_student.php");
      }

    }

?>