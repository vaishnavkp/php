<?php 
$con = mysqli_connect('localhost','root','','sampleDB');
$id = $_GET['id'];
$sql = "DELETE FROM reservation WHERE id ='$id'";
$result = mysqli_query($con,$sql);
header('location:view.php');
 ?>
