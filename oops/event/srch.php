<?php 

include('connection.php');

$srch=$_POST['srch'];
$sql="SELECT * FROM event WHERE name LIKE '$srch%'";
	$result=mysqli_query($con,$sql);
	 while ($row = mysqli_fetch_array($result)) { ?>
|<tr>
	 	|<td><?php echo $row['id']; ?></td>
           		<td><?php echo $row['name']; ?></td>
           		<td><?php echo $row['address']; ?></td>
           		<td><?php echo $row['city']; ?></td>
           		<td><?php echo $row['state']; ?></td>
           		<td><?php echo $row['pincode']; ?></td>
           		<td><?php echo $row['mobile']; ?></td>
           		<td><?php echo $row['email']; ?></td>
           		<td><a href="viewEvent.php?id=<?php echo $row['id'] ?>">View event</a></td>
           	</tr>
<?php 
}
?>