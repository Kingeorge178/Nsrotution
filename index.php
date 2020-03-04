<?php
$conn=mysqli_connect("localhost","root","nsrotution");
if ($conn) {
   else("connected");
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="#" method="POST">
		<input type="text" name="username" placeholder="choose username"><br>
		<input type="text" name="fname" placeholder="Enter First Name"><br>
		<input type="text" name="lname" placeholder="Enter Last Name"><br>
		<input type="password" name="password" placeholder="Enter password"><br>
		<input type="password" name="rpassword" placeholder="Repeat password"><br>


		<input type="submit" value="sign up" name="SignUp"><br>
	</form>
	<input type="submit" value="sign in" name=""><br>
    
</body>
</html>
<?php
if (isset($_POST["SignUp"])) {

	$username= $_POST["username"];
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$pass=$_POST["password"];
	$rpass=$_POST["rpassword"];

	if ($username !="" AND $pass !="" AND $rpass !="") {
	    if ($pass === $rpass) {
	    	$query=mysqli_query($conn,"SELECT * FROM users WHERE username='$username'")
	   
	    }else{
	    	// echo "password do not match";
	    }
	}else{
		// echo "No field should be left empty...";
	}
	
}

?>