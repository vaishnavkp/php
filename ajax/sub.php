<?php 
$con = mysqli_connect('localhost','root','','sampledb');
$id =$_POST['id'];
$sql = "SELECT * FROM sub_category WHERE cate_id = '$id'";
$result = mysqli_query($con,$sql);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 </head>
 <body>
 <?php 
while ($row = mysqli_fetch_array($result)) {  ?>
	<option value="<?php echo $row['id']; ?>"><?php echo $row['sub_cate']; ?></option>
  <?php  } ?>

 
 </body>
 </html>