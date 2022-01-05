<?php 
session_start();
include('connection.php');
include('functions.php');
$obj= new myFun();
$id = $_SESSION['id'];

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
		
	</style>
</head>
<body>
	<header style="background-color: olivedrab;">WELCOME</header>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="viewStatus.php" class="nav-link ">View status</a>
			</li>
			<li class="nav-item">
				<a href="bookEvent.php" class="nav-link active">Book event</a>
			</li>
			<li class="nav-item">
				<a href="updateProfile.php" class="nav-link ">Update profile</a>
			</li>
			<li class="nav-item">
				<a href="logout.php" class="nav-link ">Logout</a>
			</li>

		</ul>
		
	</nav>

	<form method="post">
		<table>
			<tr>
				<td><label>Event</label></td>
				<?php 
                    $result = $obj->bookEvent('add_event');
                   
				 ?>
				<td><select name="event">
					<option disabled selected value="default">Select Event</option>
					<?php while ($row = mysqli_fetch_array($result)) { ?>
						<option value="<?php echo $row['event']; ?>"><?php echo $row['event'];?></option>
				<?php  }  ?>	
					
				</select></td>
			</tr>
			<tr>
				<td><label>Date of function</label></td>
				<td><input type="date" name="date"></td>
			</tr>
			<tr>
				<td><label>Place</label></td>
				<td>
					<label>Hall</label>
					<input type="radio" name="place" value="hall"><br>
					<label>Auditorium</label>
					<input type="radio" name="place" value="auditorium"><br>
					<label>Open air</label>
					<input type="radio" name="place" value="open air">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Book"></td>
			</tr>
		</table>
	</form>

	<?php 
     if (isset($_POST['submit'])) {
     	
     	$event = $_POST['event'];
     	$date = $_POST['date'];
     	$place = $_POST['place'];
     	

     	$table = 'functions';
     	$fields = 'event,dof,place,user_id';
     	$values = "'$event','$date','$place','$id'";
     	$obj->insertEvent($table,$fields,$values);


     }
	 ?>


</body>



