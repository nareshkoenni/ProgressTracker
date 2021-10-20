<?php
session_start();// Starting Session
?>
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
 
}

#customers td, #customers th {
  border: 1px solid black;
  padding: 8px;
}

#customers tr{background-color: white;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #003366;
  color: white;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/adminpage.css">
</head>
<body style="background-image: url('images/maroon.jpg'); background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">

<div class="navbar">
  
 
 <a style="margin-top:30px;margin-left:30px;" href="index.php">Logout</a>
 <a style="margin-top:30px;margin-left:30px;" href="classes.php">Classes</a>
 <a  style="margin-top:30px;margin-left:30px;" href="students.php">Students</a>
  <a style="margin-top:30px;margin-left:30px;" href="users.php">Admin/Tutors</a>
  <a style="margin-top:30px;margin-left:30px;" href="adminhome.php">Dashboard</a>
  
 <!-- <a style="float:left"  class="navbar-brand" href="#">
          <img src="images/logo1.jpg" alt="" height="85" width="85" style="display: block;">
   </a> -->
    <h1 style="color:white;font-size:30px;margin-top:25px;margin-left:30px;">Student Progress Tracker</h1>
  
</div><br/>
  <h3 align="center" style="color:white;">Assign Student</h3>
  

 
  <div class="container" align="center" style="width: auto;">
 <?php
    include 'dbcon.php'; 
    $id=$_GET["id"];
    $sql = "SELECT id, class_name FROM classes where id=$id";
    $result = mysqli_query($conn, $sql);
     
    if($row1 = mysqli_fetch_assoc($result)) {
        
?>
     <font style="color:white;"> <b >Exercise Name</b>- <i><?php echo $row1["class_name"]; ?>  </i>   </font>
    
     <br><br> 
   <form  action='assignStudentProcess.php?classid=<?php echo $row1["id"] ;?>' method="post" style=" width: 500px">
<?php
}
    mysqli_close($conn);
?>        
  <?php include 'dbcon.php';?>		
       
<?php  
error_reporting(0);

    $sql = "SELECT id, student_name FROM students";
    
    $result = mysqli_query($conn, $sql);
     $count=4;
    while($row = mysqli_fetch_assoc($result)) {
        if($count==4){
?>          
        <table style="color: white; width: 500px">
           <tr>
                <td><input type="checkbox" name="students[]" value="<?php print $row["id"] ;?>"/></td><td><?php print $row["student_name"] ;?></td>
                  <td>&nbsp;&nbsp;</td>
 				
<?php
            $count=3;
        }else if($count==3){
?>        
                <td><input type="checkbox" name="students[]" value="<?php print $row["id"] ;?>"/></td><td><?php print $row["student_name"] ;?></td>
                  <td>&nbsp;&nbsp;</td>
 				
<?php
             $count=2;
        }else if($count==2){
?>             
                <td><input type="checkbox" name="students[]" value="<?php print $row["id"] ;?>"/></td><td><?php print $row["student_name"] ;?></td>
                  <td>&nbsp;&nbsp;</td>
 				
<?php
            $count=1;
        }else {
             $count=4;
?>
             <td><input type="checkbox" name="students[]" value="<?php print $row["id"] ;?>"/></td><td><?php print $row["student_name"] ;?></td>
               <td>&nbsp;&nbsp;</td>
 				
           </tr>
<?php           
        }
    }
    
    mysqli_close($conn);

?>
           
        </table> <br><br>
        <button  style="background-color:#003366;" type="submit"><b>Assign Students</b></button>
  
</form>
  
</div>

</body>
</html>