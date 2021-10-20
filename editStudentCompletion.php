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
  <h3 align="center" style="color:white;">Set-Student-Completion</h3>
  

 
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
   <form  action='editStudentCompletionProcess.php?classid=<?php echo $row1["id"] ;?>' method="post" style=" width: 500px">
<?php
}
    mysqli_close($conn);
?>  
       
<table id="customers" style="text-align:center; width: 600px" align="center" >
  <tr>
    <th>Student Name</th>
    <th>Student RegNo</th>
    <th>Completion</th>
    <th>Remarks</th>
  </tr>
  <?php include 'dbcon.php';?>		
   <form name="adddonationform" action="editStudentCompletionProcess.php" method="post" style="text-align:center;background-color:white; border: 1px #57B846;box-sizing: border-box;width: 600px">
       
		
<?php  
error_reporting(0);

    $sql = "SELECT sc.id, s.reg_no, s.student_name, sc.percentage, sc.remarks FROM student_classes sc, students s where sc.class_id=$id and sc.student_id=s.id";
    $result = mysqli_query($conn, $sql);
    
    while($row = mysqli_fetch_assoc($result)) {
?>        
       <input  type="hidden" name="id[]" value="<?php echo $row["id"] ;?>" required>
	<tr>
            <td><?php echo $row["student_name"] ;?></td>
		<td><?php echo $row["reg_no"] ;?></td>
                
                <td><input  type="text" name="percentage[]" value="<?php echo $row["percentage"] ;?>" required></td>
                <td><input  type="text" name="remarks[]" value="<?php echo $row["remarks"] ;?>" required></td>
        </tr>
<?php
    }
mysqli_close($conn);
?>
           
        </table> <br><br>
        <button  style="background-color:#003366;" type="submit"><b>Set Student Completion</b></button>
  
</form>
  
</div>

</body>
</html>