<?php
session_start();// Starting Session
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
           
            $id=$_POST["id"];
            $name=$_POST["name"];
            $regnum=$_POST["reg_no"];
            $dept=$_POST["dept"];
         
           if(empty($_POST["name"]) || empty($_POST["reg_no"]) ){  
                 echo "<script>alert('Updation  Fail ');window.location = 'studentedit.php'</script>"; 
           }else{
                  //  echo "ERROR: Could not execute query: $sql. " . mysqli_error($conn);
                  include 'dbcon.php';
                  $sql="update  students set student_name=?,reg_no=?,department=?  where id='$id' ";
         
                  $stmt = mysqli_prepare($conn, $sql);
                  mysqli_stmt_bind_param($stmt, "sss", $name,$regnum,$dept);  

                  if(mysqli_stmt_execute($stmt)){
                    echo "<script>alert('Updation is Successful'); window.location = 'students.php'</script>"; 
                   } 
                 mysqli_close($conn);
      
            }
        ?>
    </body>
</html>
