<?php 

include('connection.php');
include('functions.php');
$obj= new myFun();
 ?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style type="text/css">
		footer {
			background-color: darkgray;
			height: 50px;
			margin-top:200px;

		}
		.span {
			float: right;
		}
		h1 {
			text-align: center;
		}
	</style>
</head>
<body>
	<header style="background-color: olivedrab;">WELCOME</header>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="viewRegUser.php" class="nav-link ">View Registered users</a>
			</li>
			<li class="nav-item">
				<a href="addEvent.php" class="nav-link active">Add Event</a>
			</li>
			<li class="nav-item">
				<a href="logout.php" class="nav-link ">Logout</a>
			</li>
		

		</ul>
		
	</nav>
<h3>Add events</h3>
<form method="post">
	<table>
		<tr>
			<td><label>Event</label></td>
			<td><input type="text" name="event"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Add event"></td>
		</tr>
	</table>
</form>

<?php 
if (isset($_POST['submit'])) {
	$event = $_POST['event'];
	$fields = 'event';
	$values = "'$event'";
	$obj->addEvent('add_event',$fields,$values);

}

 ?>
	
	



</body>