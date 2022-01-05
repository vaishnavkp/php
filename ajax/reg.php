<?php 
$con = mysqli_connect('localhost','root','','sampledb');
$name = $_POST['name'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$pin = $_POST['pincode'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$pass = $_POST['password'];
$sql = "INSERT INTO event(name,address,city,state,pincode,mobile,email,password)VALUES('$name','$address','$city','$state','$pin','$mobile','$email','$pass')";

$result=mysqli_query($con,$sql);



 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 </head>
 <body>
 
 </body>
 </html>