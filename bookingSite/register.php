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
 </head>
 <body>
        <header style="background-color: darkgrey;">WELCOME</header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="home.php" class="nav-link ">Home</a>
            </li>
            <li class="nav-item">
                <a href="login.php" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
                <a href="register.php" class="nav-link active">Register</a>
            </li>
            <li class="nav-item">
                <a href="view.php" class="nav-link">View</a>
            </li>


        </ul>
    </nav>
    <h3>Registration</h3>
    <form method="post">
        <table>
            <tr>
                <td><label>Name:</label></td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td><label>Contact Number :</label></td>
                <td><input type="text" name="cntct"></td>
            </tr>
            <tr>
                <td><label>Username:</label></td>
                <td><input type="text" name="user"></td>
            </tr>
            <tr>
                <td><label>Password:</label></td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Register"></td>
            </tr>
        </table>
    </form>
 <?php 
      if (isset($_POST['submit'])) {
          $name = $_POST['name'];
          $contact = $_POST['cntct'];
          $user = $_POST['user'];
          $pass = $_POST['pass'];
          $sql = "INSERT INTO bookingsite(name,contact_number,username,password) VALUES('$name','$contact','$user','$pass')" ;
          $result = mysqli_query($con,$sql);
          header('location:login.php');
      }
  ?>
 </body>
 </html>