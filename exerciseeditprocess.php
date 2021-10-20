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
            
           if(empty($_POST["name"]) ){  
                 echo "<script>alert('Updation  Fail ');window.location = 'exerciseedit.php'</script>"; 
           }else{
                  //  echo "ERROR: Could not execute query: $sql. " . mysqli_error($conn);
                  include 'dbcon.php';
                  $sql="update  classes set class_name=?  where id='$id' ";
         
                  $stmt = mysqli_prepare($conn, $sql);
                  mysqli_stmt_bind_param($stmt, "s", $name);  

                  if(mysqli_stmt_execute($stmt)){
                    echo "<script>alert('Updation is Successful'); window.location = 'classes.php'</script>"; 
                   } 
                 mysqli_close($conn);
      
            }
        ?>
    </body>
</html>
