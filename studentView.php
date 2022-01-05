
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
 	<style type="text/css">
 		table,th,td {
 			border: 1px solid black ;
 			border-collapse: collapse;
 		}
 	</style>
 </head>
 <body>
    <header style="background-color: indianred;">WElCOME TO HOME PAGE</header>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="home.php" class="nav-link ">Home</a>
            </li>
            <li class="nav-item">
                <a href="staffReg.php" class="nav-link">Staff Registration</a>
            </li>
            <li class="nav-item">
                <a href="studentReg.php" class="nav-link active">Student Registration</a>
            </li>
            <li class="nav-item">
                <a href="login.php" class="nav-link">Login</a>
            </li>
        </ul>
    </nav>
    <table>
    	<tr>
    		<th>id</th>
    		<th>name</th>
    		<th>address</th>
    		<th>gender</th>
    		<th>age</th>
    		<th>Image</th>
    		<th>course</th>
    		<th>email</th>
    		<th>password</th>
    		<th>Edit</th>
    		<th>Delete</th>
    	</tr>
    	<?php 
         $sql = "SELECT * FROM student";
         $result = mysqli_query($con,$sql);
         while ($row = mysqli_fetch_array($result)) {?>
                 <tr>
                 	<td><?php echo $row['id']; ?></td>
                 	<td><?php echo $row['name']; ?></td>
                 	<td><?php echo $row['address']; ?></td>
                 	<td><?php echo $row['gender']; ?></td>
                 	<td><?php echo $row['age']; ?></td>
                 	<td><img src="images/<?php echo $row['image'];?>" height="50"> </td>
                 	<td><?php echo $row['course']; ?></td>
                 	<td><?php echo $row['email']; ?></td>
                 	<td><?php echo $row['password']; ?></td>
                    <td><a href="studentEdit.php?id=<?php echo $row['id'] ?>">Edit</a></td>
                    <td><a href="studentdelete.php?id=<?php echo $row['id'] ?>">Delete</a></td>

                 </tr> 
                 <?php } ?>     
         
    	 
    	<tr>
    		
    	</tr>
    </table>

 </body>
 </html>