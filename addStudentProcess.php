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
            $name=$_POST["name"];
            $regnum=$_POST["regnum"];
            $dept=$_POST["dept"];
             
           
                  //  echo "ERROR: Could not execute query: $sql. " . mysqli_error($conn);
                  include 'dbcon.php';
                  $sql="INSERT INTO students (student_name,reg_no,department) VALUES (?,?,?)";
         
                  $stmt = mysqli_prepare($conn, $sql);
                  mysqli_stmt_bind_param($stmt, "sss", $name,$regnum,$dept);  

                  if(mysqli_stmt_execute($stmt)){
                    $_SESSION["uname"] = $mail;  
                 
        //            echo "Records inserted successfully.";
                    echo "<script>alert('Student is added ');window.location = 'students.php'</script>"; 
                   } 
                 mysqli_close($conn);
      
            
        ?>
    </body>
</html>
