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
				<a href="viewStatus.php" class="nav-link active">View status</a>
			</li>
			<li class="nav-item">
				<a href="bookEvent.php" class="nav-link ">Book event</a>
			</li>
			<li class="nav-item">
				<a href="updateProfile.php" class="nav-link ">Update profile</a>
			</li>
			<li class="nav-item">
				<a href="logout.php" class="nav-link ">Logout</a>
			</li>

		</ul>
		
	</nav>

    <table>
    	<tr>
    		<th>Name of the event</th>
    		<th>Date</th>
    		<th>Place</th>
    		<th>Status</th>
    	</tr>
    	<?php 
          $result = $obj->viewStatus('functions','event',$id); 
          while ($row = mysqli_fetch_array($result)) {  ?>
           	<tr>
    		  <td><?php echo $row['event']; ?></td>
    		  <td><?php echo $row['dof']; ?></td>
    		  <td><?php echo $row['place']; ?></td>
    		  <td><?php if ($row['status'] == 0) {
    		  	echo "Booked";
    		  } elseif ($row['status'] == 1) {
    		  	echo "Confirmed";
    		  } else {
    		  	echo "Rejected";
    		  } ?></td>

    	   </tr>
       <?php    } ?>  
    
    	
    	
    </table>
  </body>





	