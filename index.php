<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/homepage.css">
<link rel="stylesheet" href="css/swc.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script> 

<style>

/* Media Queries: Tablet Landscape */
@media screen and (max-width: 1060px) {
    #primary { width:67%; }
    #secondary { width:30%; margin-left:3%;}  
}

/* Media Queries: Tabled Portrait */
@media screen and (max-width: 768px) {
    #primary { width:100%; }
    #secondary { width:100%; margin:0; border:none; }
}

img { max-width: 100%; height: auto; }

@media (min-device-width:600px) {
    img[data-src-600px] {
        content: attr(data-src-600px, url);
    }
}

@media (min-device-width:800px) {
    img[data-src-800px] {
        content: attr(data-src-800px, url);
    }
}

.video-container {
	position: relative;
	padding-bottom: 56.25%;
	padding-top: 30px;
	height: 0;
	overflow: hidden;
}

.video-container iframe,  
.video-container object,  
.video-container embed {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

#box{
  padding:em;
  background:#003366;
  float: left;
  width:200px;
  height:200px;
  font-family:Helvetica;
  margin-left: 30;
}


#box h1, span{
  color:#FFFFFF;
  font-weight:normal
}

#box h1{
  font-size:1.4em;
  text-align:center;
  line-height:1.2;
}

#box span{
  font-size:4.4em;
  text-align:center;
  display:block;
}


#box1{
  padding:em;
  background:#003366;
  float:  right;
  width:200px;
  box-sizing: 300px;
  height:200px;
  font-family:Helvetica;
}
#box1 h1, span{
  color:#FFFFFF;
  font-weight:normal
}

#box1 h1{
  font-size:1.4em;
  text-align:center;
  line-height:1.2;
}

#box1 span{
  font-size:4.4em;
  text-align:center;
  display:block;
}


@media screen and (max-width: 600px) {
  .navbar a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .navbar a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .navbar.responsive {position: relative;}
  .navbar.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .navbar.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .navbar.responsive .dropdown {float: none;}
  .navbar.responsive .dropdown-content {position: relative;}
  .navbar.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }



</style>
</head>

<body  style="background-image: url('images/maroon.jpg'); background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">

 <div class="navbar">
  
 
   <a  style="margin-top:30px;margin-left:30px;" href="studentLogin.html">Student</a>
  <a style="margin-top:30px;margin-left:30px;" href="tutorLogin.html">Tutor</a>
  <a style="margin-top:30px;margin-left:30px;" href="adminLogin.html">Admin</a>
  <a style="margin-top:30px;margin-left:30px;" href="index.php">Home</a>
 
 <!-- <a style="float:left"  class="navbar-brand" href="#">
          <img src="images/logo1.jpg" alt="" height="85" width="85" style="display: block;">
   </a> -->
    <h1 style="color:white;font-size:30px;margin-top:25px;margin-left:30px;">Student Progress Tracker</h1>
  
</div>

<br/><br/>

</body>
</html>


</html>

