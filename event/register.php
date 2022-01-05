<?php 
$con = mysqli_connect('localhost','root','','sampleDB');

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
				<a href="register.php" class="nav-link active">Register</a>
			</li>
			<li class="nav-item">
				<a href="login.php" class="nav-link">Login</a>
			</li>

		</ul>
		
	</nav>
	<h3>Registration</h3>
	<form method="post">
	<table>
		<tr>
			<td><label>Name</label></td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td><label>Address</label></td>
			<td><input type="text" name="address"></td>
		</tr>
		<tr>
			<td><label>City</label></td>
			<td><input type="text" name="city"></td>
		</tr>
		<tr>
			<td><label>State</label></td>
			<td><input type="text" name="state"></td>
		</tr>
		<tr>
			<td><label>Pincode</label></td>
			<td><input type="text" name="pin"></td>
		</tr>
		<tr>
			<td><label>Mobile</label></td>
			<td><input type="text" name="mobile"></td>
		</tr>
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
			<td><input type="submit" name="submit" value="Register"></td>
		</tr>


	</table>
	</form>


	<?php 
      if (isset($_POST['submit'])) {
      	$name = $_POST['name'];
      	$address = $_POST['address'];
      	$city = $_POST['city'];
      	$state = $_POST['state'];
      	$pin = $_POST['pin'];
      	$mobile = $_POST['mobile'];
      	$email = $_POST['email'];
      	$pass = $_POST['pass'];
      	$sql = "INSERT INTO event(name,address,city,state,pincode,mobile,email,password)VALUES('$name','$address','$city','$state','$pin','$mobile','$email','$pass')";
      mysqli_query($con,$sql);
      header('location:login.php');

      }

	 ?>
<footer><span class="span">email id:event@gmail.com</span><br>
		    <span class="span">ph:no- 9856741256</span>
	</footer>
</body>
</html>