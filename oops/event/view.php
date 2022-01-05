<?php 
session_start();
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
				<a href="viewStatus.php" class="nav-link ">View status</a>
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
	 <?php 
      $id = $_SESSION['id'];
      $result = $obj->view('event',$id);
      $row = mysqli_fetch_array($result);
      echo "<h1> WELCOME ". $row['name']. "</h1>";
   
	 ?>

	 