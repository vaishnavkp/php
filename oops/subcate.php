<?php
$con=mysqli_connect("localhost","root","","sampledb");
$id=$_POST['id'];

$sql="SELECT * FROM sub_category WHERE cate_id='$id'";
$result=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		while($row=mysqli_fetch_array($result))
		{
	?>
	<option value="<?php echo $row['id']; ?>"><?php echo $row['sub_cate']; ?></option>
	<?php
		}
	?>
</body>
</html>