<?php 
session_start();
include('connection.php');
include ('function.php');
$obj= new myFun();
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
	<label>email</label><br>
	<input type="email" name="email"><br>
	<label>Password</label><br>
	<input type="password" name="pass"><br>
	<input type="submit" name="login" value="Login">
</form>
</body>
</html>
<?php
	if(isset($_POST['login']))
	{
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$result=$obj->login('register',$email,$pass);
		if(mysqli_num_rows($result)>0)
		{     
			$row = mysqli_fetch_array($result);
			$_SESSION['id'] = $row['reg_id'];
			header('location:view.php');
		} else 
		{
			echo "Invalid email or password";
		}

	}
	?>