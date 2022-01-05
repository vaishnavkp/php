<?php 
$con = mysqli_connect('localhost','root','','sampledb');
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$id = $_POST['id'];
$sql = "UPDATE product SET quantity = '$quantity',tot_amt = '$price' WHERE id = '$id' ";
$result = mysqli_query($con,$sql);

 ?>
 