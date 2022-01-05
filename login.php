<?php 
session_start();
$con = mysqli_connect('localhost','root','','sampleDB') 
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 </head>
 <body>
 		<header style="background-color: indianred;">WElCOME TO HOME PAGE</header>
 		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="home.php" class="nav-link ">Home</a>
			</li>
			<li class="nav-item">
				<a href="staffReg.php" class="nav-link">Staff Registration</a>
			</li>
			<li class="nav-item">
				<a href="studentReg.php" class="nav-link">Student Registration</a>
			</li>
			<li class="nav-item">
				<a href="login.php" class="nav-link active">Login</a>
			</li>
		</ul>
	</nav>
	<form method="post">
<table>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="pass"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Login"></td>
	</tr>
</table>
</form>
<?php
if (isset($_POST['submit'])) {
	// code...
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$sql="SELECT * FROM student WHERE email='$email' AND password='$pass'";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0)
	{
		$row=mysqli_fetch_array($result);
		$_SESSION['sessid']=$row['id'];
	
		header('location:profile.php');
	}
	else
	{
		echo "Invalid email or password";
	}
}
?>
 	 </body>
 </html>