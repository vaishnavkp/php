<?php 
session_start();
$con = mysqli_connect('localhost','root','','sampleDB');
$user_id = $_SESSION['user_id'];
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
 	<header style="background-color: darkgrey;">WELCOME</header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="home.php" class="nav-link ">Home</a>
            </li>
            <li class="nav-item">
                <a href="login.php" class="nav-link active">Login</a>
            </li>
            <li class="nav-item">
                <a href="register.php" class="nav-link">Register</a>
            </li>
            <li class="nav-item">
                <a href="view.php" class="nav-link">View</a>
            </li>



        </ul>
    </nav>
    <h3>Reserve Seat</h3>

    <form method="post">
    	<table>
    		<tr>
    			<td><label>Seat type:</label></td>
    			<td><select name="stType">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                </select></td>
    		</tr>
    		<tr>
    			<td><label>Seat No:</label></td>
    			<td><input type="radio" name="stNum" value="1">
                    <label>1</label>
                    <input type="radio" name="stNum" value="2">
                    <label>2</label>
                    <input type="radio" name="stNum" value="3">
                    <label>3</label>
                    <input type="radio" name="stNum" value="4">
                    <label>4</label>
                    <input type="radio" name="stNum" value="5">
                    <label>5</label>
                    <input type="radio" name="stNum" value="6">
                    <label>6</label>
                    <input type="radio" name="stNum" value="7">
                    <label>7</label>
                    <input type="radio" name="stNum" value="8">
                    <label>8</label>
                    <input type="radio" name="stNum" value="9">
                    <label>9</label>
                    <input type="radio" name="stNum" value="10">
                    <label>10</label>

                </td>
    		</tr>
    		<tr>
    			<td></td>
    			<td><input type="submit" name="submit" value="Submit"></td>
    		</tr>
    	</table>
    </form>
  <?php 
    if (isset($_POST['submit'])) {
        $type = $_POST['stType'];
        // echo $type;
        // echo "<br>";
        $num = $_POST['stNum'];
       // echo $num;
        $sql = "INSERT INTO reservation (seat_type,seat_No,status,user_id)VALUES('$type','$num','0','$user_id')";
        $result = mysqli_query($con,$sql);
        header('location:view.php');
    }

   ?>
 
 </body>
 </html>