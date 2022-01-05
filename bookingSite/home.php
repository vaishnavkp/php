<?php 
$con = mysqli_connect('localhost','root','','sampleDB');
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 	<style type="text/css">
 		.top {
 			margin-top: 15px;
 		}
 		.down {
 			margin-top: 35px;
 		}
 	</style>
 </head>
 <body>
 	<header style="background-color: darkgrey;">WELCOME</header>
 	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
 		<ul class="navbar-nav">
 			<li class="nav-item">
 				<a href="home.php" class="nav-link active">Home</a>
 			</li>
 			<li class="nav-item">
 				<a href="login.php" class="nav-link">Login</a>
 			</li>
 			<li class="nav-item">
 				<a href="register.php" class="nav-link">Register</a>
 			</li>
            <li class="nav-item">
                <a href="view.php" class="nav-link">View</a>
            </li>


 		</ul>
 	</nav>
 	<div class="container">
 	<div class="row">
 		<div class="col-sm-4">
 			<img src="jon.jpg" alt="jonWick" height="200px" width="200px" class="top">
 		</div>
 		<div class="col-sm-4">
 			<img src="spiderman.jpg" alt="spiderman" height="200px" width="200px" class="top">
 		</div>
 		<div class="col-sm-4">
 			<img src="joker.jpg" alt="joker" height="200px" width="200px" class="top">
 		</div>

 	</div>
 	<div class="row">
 		<div class="col-sm-4">
 			<img src="harry.jpg" alt="harry" height="200px" width="200px" class="down">
 		</div>
 		<div class="col-sm-4">
 			<img src="godfather.jpg" alt="godfather" height="200px" width="200px" class="down">
 		</div>
 		<div class="col-sm-4">
 			<img src="star.jpg" alt="star" height="200px" width="200px" class="down">
 		</div>
 	</div>

 	</div>
 
 </body>
 </html>