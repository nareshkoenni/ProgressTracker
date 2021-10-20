<?php 
session_start();

?>
<?php
 include("dbcon.php");
 echo 'connected';



	$query="select * from users where email='".$_POST['uid']."' and password='".$_POST['pwd']."'";
$result = mysqli_query($conn,$query) or  die('Could not look up user information; ' . mysqli_error($conn));
	if(mysqli_num_rows($result)){
                $_SESSION['email']=$_POST['uid'];
        	echo header("Location:adminhome.php");
	}
	else{
		echo header("Location:adminLogin.html?msg1=fail");;
                
}
?>
</body>
</html>