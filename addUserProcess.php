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
            $mail=$_POST["email"];
            $mobile_number=$_POST["phone"];
            $usertype=$_POST["usertype"];
            $password=$_POST["pwd"];
            $cnfpassword=$_POST["cnfpwd"];
             
           if($_POST["pwd"] != $_POST["cnfpwd"]){  
                 echo "<script>alert('Registration  Fail - password missmatch');window.location = 'adduser.php'</script>"; 
           }else{
                  //  echo "ERROR: Could not execute query: $sql. " . mysqli_error($conn);
                  include 'dbcon.php';
                  $sql="INSERT INTO users (name,usertype,phone,email,password) VALUES (?,?,?,?,?)";
         
                  $stmt = mysqli_prepare($conn, $sql);
                  mysqli_stmt_bind_param($stmt, "sssss", $name,$usertype,$mobile_number,$mail,$password);  

                  if(mysqli_stmt_execute($stmt)){
                    $_SESSION["uname"] = $mail;  
                 
        //            echo "Records inserted successfully.";
                    echo "<script>alert('User is added ');window.location = 'users.php'</script>"; 
                   } 
                 mysqli_close($conn);
      
            }
        ?>
    </body>
</html>
