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
            $mail=$_POST["email"];
            $mobile_number=$_POST["phone"];
            $usertype=$_POST["usertype"];
         
           if(empty($_POST["email"]) || empty($_POST["phone"]) ){  
                 echo "<script>alert('Updation  Fail ');window.location = 'useredit.php'</script>"; 
           }else{
                  //  echo "ERROR: Could not execute query: $sql. " . mysqli_error($conn);
                  include 'dbcon.php';
                  $sql="update  users set name=?,email=?,phone=?,usertype=?  where id='$id' ";
         
                  $stmt = mysqli_prepare($conn, $sql);
                  mysqli_stmt_bind_param($stmt, "ssss", $name,$mail,$mobile_number,$usertype);  

                  if(mysqli_stmt_execute($stmt)){
                    echo "<script>alert('Updation is Successful'); window.location = 'users.php'</script>"; 
                   } 
                 mysqli_close($conn);
      
            }
        ?>
    </body>
</html>
