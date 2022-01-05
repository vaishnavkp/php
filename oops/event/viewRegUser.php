<?php 

include('connection.php');
include('functions.php');
$obj= new myFun();
$result = $obj->regUsers('event');

 ?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
   </script>
	<style type="text/css">
		footer {
			background-color: darkgray;
			height: 50px;
			margin-top:200px;

		}
		.span {
			float: right;
		}
		table,th,td {
			border: 1px solid black;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<header style="background-color: olivedrab;">WELCOME</header>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="viewRegUser.php" class="nav-link active">View Registered users</a>
			</li>
			<li class="nav-item">
				<a href="addEvent.php" class="nav-link ">Add Event</a>
			</li>
			<li class="nav-item">
				<a href="logout.php" class="nav-link ">Logout</a>
			</li>
		

		</ul>
		
	</nav>
	<form method="post">
		<input type="text" name="srch" placeholder="search for users" id="srch">
		<!-- <input type="submit" name="btn_srch" value="Click"> -->
		
	</form>
	<?php 
if (isset($_POST['btn_srch'])) {
	// code...
	$srch=$_POST['srch'];
	$sql="SELECT * FROM event WHERE name LIKE '%$srch'";
	$result=mysqli_query($con,$sql);
}

	?>

	<table>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>address</th>
			<th>city</th>
			<th>state</th>
			<th>pincode</th>
			<th>mobile</th>
			<th>email</th>
			<th>Action</th>


		</tr>
		<div id="data">
		<?php 
           while ($row = mysqli_fetch_array($result)) { ?>
           	<tr>
           		<td><?php echo $row['id']; ?></td>
           		<td><?php echo $row['name']; ?></td>
           		<td><?php echo $row['address']; ?></td>
           		<td><?php echo $row['city']; ?></td>
           		<td><?php echo $row['state']; ?></td>
           		<td><?php echo $row['pincode']; ?></td>
           		<td><?php echo $row['mobile']; ?></td>
           		<td><?php echo $row['email']; ?></td>
           		<td><a href="viewEvent.php?id=<?php echo $row['id'] ?>">View event</a></td>

			
	     	</tr>
           	
         <?php } ?>

		</div>
		
	</table>
	

	<script type="text/javascript">
		$(document).ready(function(){
			$('#srch').keydown(function(){

				var srch=$('#srch').val();
				$.ajax({
					type:'post',
					url:'srch.php',
					data:{
						srch:srch
					},
					success:function(result)
					{
						// alert(result)
						$('#data').html(result);
					}
				});
			});
		});
	</script>

</body>