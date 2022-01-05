<?php 
$con=mysqli_connect('localhost','root','','sampleDB');
$id=$_GET['sid'];
$sql="select * from register where reg_id='$id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
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
		<input type="text" name="name" value="<?php echo $row['name'];?>"><br>
		<label>Email</label>
		<input type="text" name="email" value="<?php echo $row['email'];?>"><br>
		<label>password</label>
		<input type="text" name="password" value="<?php echo $row['password'];?>"><br>
		<label>Mobile.No</label>
		<input type="text" name="number" value="<?php echo $row['mobile'];?>"><br>
		<label>Date of birth</label>
		<input type="date" name="dob" value="<?php echo $row['dob'];?>"><br>
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
	$sql1="update register set name='$name',email='$email',password='$password',mobile='$mobile', dob='$dob' where reg_id='$id' ";
	// echo $sql1;
	// exit();
	mysqli_query($con,$sql1);
	header('location:view.php');
}

?>
</body>
</html>