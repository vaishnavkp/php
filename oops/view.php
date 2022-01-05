<?php 
session_start();
include('connection.php');
include('function.php');
$obj=new myFun();
$id = $_SESSION['id'];
$result = $obj->selectId('register',$id);
$row = mysqli_fetch_array($result);

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
 	<table>
 		<tr>
 			<td><label>Name</label></td>
 			<td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
 		</tr>
 		<tr>
 			<td><label>DOB</label></td>
 			<td><input type="date" name="date" value="<?php echo $row['dob']; ?>"></td>
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
 			<td><input type="submit" name="submit" value="Edit"></td>
 		</tr> 
 	</table>
 </form>

  <?php 
if (isset($_POST['submit'])) {

	$name = $_POST['name'];
	$date = $_POST['date'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
  $values="name='$name',email = '$email',password = '$pass',mobile = '$mobile',dob = '$date'";
  $obj->updateData('register',$values,$id);
 header('location:viewData.php');
	


}