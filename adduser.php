<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Student Progress Tracker</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/login.css">
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
  
</div><br/><br/>
  <div align="center">
      <form name="adddonationform" action="addUserProcess.php" method="post" style="text-align:center;background-color:white;width:30%; border: 1px #57B846;box-sizing: border-box;">
  
  <h2 style="margin:0 auto;width:87%;"><center>New User</center></h2>
  <div class="container">
      <br/><br/>
      <input   placeholder="Name" type="text" name="name" required>
   
      <br/><br/>
      <input  type="text" placeholder="Phone" name="phone" maxlength="10" required>
    <br/>
    <br/>
    <input   placeholder="email" type="email" name="email" required>
    <br/>
    <br/>
    
    <select style="width:90%;height:35px;color:#003366;background-color:#f2f2f2;border:none;" id="mode" name="usertype" required>
					<option value=""  selected>&nbsp;&nbsp;&nbsp;<b>User Type</b></option>
					                                 <option value="admin">Admin</option>
									<option value="tutor">Tutor</option>
									
									</select>
							
	</select><br/><br/>
        
    <input  type="password" placeholder="Password" name="pwd" required>
    <br/>    <br/>
	<input  type="password" placeholder="Confirm Password" name="cnfpwd" required>
    <br/>    <br/>
	
 
   <button  style="background-color:#003366;" type="submit"><b>ADD</b></button>
   
</div>
  
</form>
  
</div>
</body>
</html>