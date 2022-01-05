<?php 
session_start();
$con = mysqli_connect('localhost','root','','sampleDB');
$id = $_SESSION['id'];
$sql1 = "SELECT * FROM add_event";
$res = mysqli_query($con,$sql1);



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
			margin-top:400px;

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
				<a href="viewstatus.php" class="nav-link ">View Status </a>
			</li>
			<li class="nav-item">
				<a href="bookEvent.php" class="nav-link active">Book Event</a>
			</li>
			<li class="nav-item">
				<a href="update.php" class="nav-link ">Update Profile</a>
			</li>
			<li class="nav-item">
				<a href="logout.php" class="nav-link ">Logout</a>
			</li>

		</ul>
		
	</nav>
	<h3>Book Event</h3>
    <form method="post">
	<table>
		<tr>
			<td><label>Event</label></td>
			<td><select name="event">
				<option selected disabled value="default">Select event</option>
                  <?php 
                     while ($row = mysqli_fetch_array($res)) {?>
                     	<option value="<?php echo $row['event']; ?>"><?php echo $row['event']; ?></option>
                     	
                     <?php  } ?>

                   ?>
				
			</select></td>
		</tr>
		<tr>
			<td><label>Date of function</label></td>
			<td><input type="date" name="date"></td>
		</tr>
		<tr>
			<td><label>Place</label></td>
			<td><label>Hall</label>
				<input type="radio" name="venue" value="hall"><br>
				<label>Auditorium</label>
				<input type="radio" name="venue" value="auditorium"><br>
				<label>Open air</label>
		  		<input type="radio" name="venue" value="open air"></td>

		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
   </form>
   	<?php 
       if (isset($_POST['submit'])) {
       	$event = $_POST['event'];
       	$date = $_POST['date'];
       	$place = $_POST['venue'];

    $sql = "INSERT INTO functions(event,dof,place,user_id) VAlUES('$event','$date','$place','$id')";
    mysqli_query($con,$sql);

        }
	 ?>

   <footer><span class="span">email id:event@gmail.com</span><br>
		    <span class="span">ph:no- 9856741256</span>
	</footer>



 </body>
 </html>