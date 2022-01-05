<?php 

$con=mysqli_connect('localhost','root','','sampleDB');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		table,th,td {
			border: 1px solid black;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Password</th>
			<th>Mobile</th>
			<th>Date of Birth</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php 
		$sql="SELECT * FROM register";
		$result=mysqli_query($con,$sql);
		// print_r($result);
		while($row=mysqli_fetch_array($result))
		{
		?>
		<tr>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['password'];?> </td>
			<td><?php echo $row['mobile'];?> </td>
			<td><?php echo $row['dob'];?> </td>
			<td><a href="edit.php?sid=<?php echo $row['reg_id'];?>">Edit</a> </td>
			<td><a href="delete.php?sid=<?php echo $row['reg_id'];?>">Delete</a> </td>
		</tr>
		<?php 
	}
	?>
	</table>

</body>
</html>