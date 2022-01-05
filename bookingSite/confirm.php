<?php 
session_start();
$con = mysqli_connect('localhost','root','','sampleDB');
$id = $_GET['id'];


$confirm = "UPDATE reservation SET status = 1 WHERE user_id = '$id' ";
 mysqli_query($con,$confirm);
header('location:adminview.php');





// elseif ($row['status'] == 1) {
// 	$confirm = "UPDATE reservation SET status = 'booked' WHERE user_id = '$id' ";
// 	$res = mysqli_query($con,$confirm);
// } else {
//     $confirm = "UPDATE reservation SET status = 'rejected' WHERE user_id = '$id' ";
// 	$res = mysqli_query($con,$confirm);
// 	
// }
 ?>