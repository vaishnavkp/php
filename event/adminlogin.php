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
     footer {
            background-color: darkgray;
            height: 50px;
            margin-top:380px;

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
                <a href="viewstatus.php" class="nav-link active">View Status </a>
            </li>
            <li class="nav-item">
                <a href="bookEvent.php" class="nav-link ">Book Event</a>
            </li>
            <li class="nav-item">
                <a href="update.php" class="nav-link ">Update Profile</a>
            </li>
            <li class="nav-item">
                <a href="logout.php" class="nav-link ">Logout</a>
            </li>

        </ul>
        
    </nav>
    <h3>Admin login</h3>
 <form method="post">
     <table>
         <tr>
             <td><label>Email</label></td>
             <td><input type="text" name="email"></td>
         </tr>
         <tr>
             <td><label>Password</label></td>
             <td><input type="password" name="pass"></td>
         </tr>
         <tr>
             <td></td>
             <td><input type="submit" name="submit" value="Login"></td>
         </tr>
     </table>
 </form>

<?php 
if (isset($_POST['submit'])) {
     $email = $_POST['email'];
     $pass = $_POST['pass'];
     $sql = "SELECT * FROM admin_login WHERE email = '$email' AND password = '$pass'";
     $result = mysqli_query($con,$sql);
     if (mysqli_num_rows($result) > 0) {
         header('location:adminView.php');
     } else {
        echo "Invalid email or password";
     }
}
 ?>

 <footer><span class="span">email id:event@gmail.com</span><br>
            <span class="span">ph:no- 9856741256</span>
    </footer>

 </body>
 </html>