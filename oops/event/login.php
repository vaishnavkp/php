<?php
session_start(); 
include('connection.php');
include('functions.php');
$obj= new myFun();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style type="text/css">
		footer {
			background-color: darkgray;
			height: 50px;
			margin-top:200px;

		}
		.span {
			float: right;
		}
	</style>
</head>
<body>
	<header style="background-color: olivedrab;">WELCOME</header>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="home.php" class="nav-link ">Home</a>
			</li>
			<li class="nav-item">
				<a href="register.php" class="nav-link ">Register</a>
			</li>
			<li class="nav-item">
				<a href="login.php" class="nav-link active">Login</a>
			</li>

		</ul>
		
	</nav>
	<h3>Login</h3>
	<form method="post">
		<table>
			<tr>
				<td><label>Email</label></td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td><label>Password</label></td>
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
      	$email = $_POST['email'];
      	$pass = $_POST['pass'];
      	$result = $obj->login('event',$email,$pass);
      	if (mysqli_num_rows($result)>0) {
      		$row = mysqli_fetch_array($result);
      	    $_SESSION['id'] = $row['id'];
      		header('location:view.php');
      	} else {
      		echo "Invalid email or password";
      	}
      }

	 ?>

	 	</body>