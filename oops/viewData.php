<?php 
include('connection.php');
include('function.php');
$obj=new myFun();

$result=$obj->selectData('register');

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
		<th>password</th>
		<th>mobile</th>
		<th>dob</th>
		<th>Edit</th>
		<th>Delete</th>

	</tr>
	<?php 
       while ($row = mysqli_fetch_array($result)) {?>
      <tr>
		<td><?php echo $row['name']; ?></td>
	    <td><?php echo $row['email']; ?></td>
		<td><?php echo $row['password']; ?></td>
		<td><?php echo $row['mobile']; ?></td>
		<td><?php echo $row['dob']; ?></td>
		<td><a href="edit.php?id=<?php echo $row['reg_id'] ?>">edit</a></td>
		<td><a href="delete.php?id=<?php echo $row['reg_id'] ?>">delete</a></td>

	</tr>
      <?php }?>
	
</table>

</body>
</html>