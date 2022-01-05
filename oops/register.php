<?php 
include('connection.php');
include('function.php');
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
	<h3>Registration</h3>
    <form method="post">
    	<table>
    		<tr>
    			<td><label>Name</label></td>
    			<td><input type="text" name="name"></td>
    		</tr>
    		<tr>
    			<td><label>DOB</label></td>
    			<td><input type="date" name="date"></td>
    		</tr>
    		<tr>
    			<td><label>mobile</label></td>
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
        	$date = $_POST['date'];
        	$mobile = $_POST['mobile'];
        	$email = $_POST['email'];
        	$pass = $_POST['pass'];
        	$table='register';
        	$fields='name,email,password,mobile,dob';
        	$values="'$name','$email','$pass','$mobile','$date'";
        	$obj->insertData($table,$fields,$values);
        	header('location:viewData.php');
        }

     ?>
</body>
</html>