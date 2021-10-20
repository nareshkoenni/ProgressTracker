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
  
</div><br/><br/><br/>
  <h1 align="center" style="color:white;">Users</h1>
  
  <h4 align="right" > <a href='adduser.php' style="color:white;">Add User</a></h4>
<table id="customers" style="text-align:center;" align="center">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Phone</th>
     <th>Email</th>
    <th>UserType</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  
  
 


<?php include 'dbcon.php';?>		

<?php  
error_reporting(0);

    $sql = "SELECT id, name, phone,email,usertype FROM users";
    
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
?>        

	<tr>
		<td><?php echo $row["id"] ;?></td>
		<td><?php echo $row["name"] ;?></td>
        <td><?php echo $row["phone"] ;?></td>
        <td><?php echo $row["email"] ;?></td>
        <td><?php echo $row["usertype"] ;?></td>
        <td><a href='useredit.php?id=<?php echo $row["id"] ;?>'>EDIT</a></td>
        <td><a href='userdeleteprocess.php?id=<?php echo $row["id"] ;?>'>DELETE</a></td>
                
                
	</tr>
<?php
    }
    mysqli_close($conn);

?>
</table>

</body>
</html>





