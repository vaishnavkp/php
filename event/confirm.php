<?php 
$con = mysqli_connect('localhost','root','','sampleDB');
$id = $_GET['id'];

 $sql = "UPDATE functions SET status = 1 WHERE func_id = '$id' ";
 mysqli_query($con,$sql);
 header('location:viewRegUser.php');



 ?>