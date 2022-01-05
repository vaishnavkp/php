<?php 
$con=mysqli_connect('localhost','root','','sampleDB');
$id=$_GET['sid'];
$sql="delete  from register where reg_id='$id'";
mysqli_query($con,$sql);
header('location:view.php');
?>