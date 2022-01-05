<?php 
$con = mysqli_connect('localhost','root', '','sampleDB')
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 </head>
 <body>
 		<header style="background-color: indianred;">WElCOME TO HOME PAGE</header>
 		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="home.php" class="nav-link active">Home</a>
			</li>
			<li class="nav-item">
				<a href="staffReg.php" class="nav-link">Staff Registration</a>
			</li>
			<li class="nav-item">
				<a href="studentReg.php" class="nav-link">Student Registration</a>
			</li>
			<li class="nav-item">
				<a href="login.php" class="nav-link">Login</a>
			</li>
		</ul>
	</nav>
<div class="container">
<div class="row">
	<div class="col-sm-12">
		<img src="hansraj.jpg" alt="hansraj" width="100%" height="100%">
	</div>
	
</div>
</div>
 	
 	
 
 </body>
 </html>