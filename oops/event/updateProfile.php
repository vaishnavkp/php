<?php 
session_start();
include('connection.php');
include('functions.php');
$obj= new myFun();
$id = $_SESSION['id'];
$result = $obj->view('event',$id);
$row = mysqli_fetch_array($result);

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
				<a href="viewStatus.php" class="nav-link ">View status</a>
			</li>
			<li class="nav-item">
				<a href="bookEvent.php" class="nav-link ">Book event</a>
			</li>
			<li class="nav-item">
				<a href="updateProfile.php" class="nav-link active">Update profile</a>
			</li>
			<li class="nav-item">
				<a href="logout.php" class="nav-link ">Logout</a>
			</li>

		</ul>
		
	</nav>

	<form method="post">
	<table>
		<tr>
			<td><label>Name</label></td>
			<td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
		</tr>
		<tr>
			<td><label>Address</label></td>
			<td><input type="text" name="address" value="<?php echo $row['address']; ?>"></td>
		</tr>
		<tr>
			<td><label>City</label></td>
			<td><input type="text" name="city" value="<?php echo $row['city']; ?>"></td>
		</tr>
		<tr>
			<td><label>State</label></td>
			<td><input type="text" name="state" value="<?php echo $row['state']; ?>"></td>
		</tr>
		<tr>
			<td><label>Pincode</label></td>
			<td><input type="text" name="pin" value="<?php echo $row['pincode']; ?>"></td>
		</tr>
		<tr>
			<td><label>Mobile</label></td>
			<td><input type="text" name="mobile" value="<?php echo $row['mobile']; ?>"></td>
		</tr>
		<tr>
			<td><label>Email</label></td>
			<td><input type="text" name="email" value="<?php echo $row['email']; ?>"></td>
		</tr>
		<tr>
			<td><label>Password</label></td>
			<td><input type="password" name="pass" value="<?php echo $row['password']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Update"></td>
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
      	$update = "name = '$name',address = '$address',city = '$city',state = '$state',pincode = '$pin',mobile = '$mobile',email = '$email',password = '$pass'";
      	$obj->updateProfile('event',$update,$id);
}

	 ?>


</body>


