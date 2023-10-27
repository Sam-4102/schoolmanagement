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

    $data=mysqli_connect($host,$user,$paassword,$db);

    $sql="SELECT * from admission";

    $result=mysqli_query($data,$sql);


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admission</title>

    <?php
         include 'admissioncss.php'
    ?>




</head>
<body>
    

<?php

include 'admission_sidebar.php'



?>

<div class="content">
    
<center>
   <h1><u> Applied for Admission </u></h1>
  
        <table border="1px" >
            <tr>
                <th style="padding: 20px; font-size:25px;">Name </th>
                <th style="padding: 20px; font-size:25px;">Email </th>
                <th style="padding: 20px; font-size:25px;">Phone </th>
                <th style="padding: 20px; font-size:25px;"> Course</th>
                <th style="padding: 20px; font-size:25px;"> Message</th>
                
            </tr>
 
            <?php

                while($info=$result->fetch_assoc())
                {

            ?>

            <tr>
                 <td  style="padding: 20px;"> 
                    <?php  echo"{$info['name']}"   ?>
                </td>
                 <td  style="padding: 20px; ">
                 <?php  echo"{$info['email']}"   ?>
                </td>
                 <td  style="padding: 20px;">
                 <?php  echo"{$info['phone']}"   ?>
                </td>
                <td  style="padding: 20px;">
                 <?php  echo"{$info['course']}"   ?>
                </td>
        
                 <td  style="padding: 20px;">  
                 <?php  echo"{$info['message']}"   ?>
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