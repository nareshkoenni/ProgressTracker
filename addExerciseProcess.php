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
             
           
                  //  echo "ERROR: Could not execute query: $sql. " . mysqli_error($conn);
                  include 'dbcon.php';
                  $sql="INSERT INTO classes (class_name) VALUES (?)";
         
                  $stmt = mysqli_prepare($conn, $sql);
                  mysqli_stmt_bind_param($stmt, "s", $name);  

                  if(mysqli_stmt_execute($stmt)){
                    $_SESSION["uname"] = $mail;  
                 
        //            echo "Records inserted successfully.";
                    echo "<script>alert('Class is added ');window.location = 'classes.php'</script>"; 
                   } 
                 mysqli_close($conn);
      
            
        ?>
    </body>
</html>
