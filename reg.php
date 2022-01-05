<?php
$con=mysqli_connect('localhost','root','','sampleDB')
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post">
		<label>Name</label>
		<input type="text" name="name"><br>
		<label>Email</label>
		<input type="text" name="email"><br>
		<label>password</label>
		<input type="password" name="password"><br>
		<label>Mobile.No</label>
		<input type="text" name="number"><br>
		<label>Date of birth</label>
		<input type="date" name="dob"><br>
		<input type="submit" name="submit" value="Register">


	</form>
<?php 
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$mobile = $_POST['number'];
	$dob = $_POST['dob'];
	$sql="INSERT INTO register(name,email,password,mobile,dob)VALUES('$name','$email','$password','$mobile','$dob')";
	mysqli_query($con,$sql);
	header('location:view.php');
}

?>
</body>
</html>
