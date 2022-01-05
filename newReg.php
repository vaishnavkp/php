<?php 
$con = mysqli_connect('localhost','root','','sampleDB')

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form method="post">
 		<label>Name</label>
 		<input type="text" name="name">
 		<label>Email</label>
 		<input type="text" name="email">
 		<label>Password</label>
 		<input type="password" name="pass">
 		<label>Mobile.No</label>
 		<input type="text" name="mobile">
 		<label>Date of Birth</label>
 		<input type="Date" name="dob"><br>
 		<input type="submit" name="submit" value="Register">
 	</form>

 	<?php 
        if (isset($_POST['submit'])) {
        	$name = $_POST['name'];
        	$email = $_POST['email'];
        	$pass = $_POST['pass'];
        	$mobile = $_POST['mobile'];
        	$dob = $_POST['dob']; 
      $sql = "INSERT INTO register(name,email,password,mobile,dob) VALUES('$name','$email','$pass','$mobile','$dob')";
      $result = mysqli_query($con,$sql);
      header('location:newView.php');
        }

 	 ?>
 
 </body>
 </html>