<?php 
$con = mysqli_connect('localhost','root','','sampleDB');
$id = $_GET['id'];
$sql = "SELECT * FROM staff WHERE id = '$id'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);


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
                <a href="home.php" class="nav-link ">Home</a>
            </li>
            <li class="nav-item">
                <a href="staffReg.php" class="nav-link active">Staff Registration</a>
            </li>
            <li class="nav-item">
                <a href="studentReg.php" class="nav-link">Student Registration</a>
            </li>
            <li class="nav-item">
                <a href="login.php" class="nav-link">Login</a>
            </li>
        </ul>
    </nav>
    <form method="post">
    <table>
        <tr>
            <td><label>Name</label></td>
            <td><input type="text" name="name" value="<?php echo $row['name'] ?>" ></td>
        </tr>
              <tr>
            <td><label>Address</label></td>
            <td><input type="text" name="address" value="<?php echo $row['address'] ?>" ></td>
        </tr>
              <tr>
            <td><label>Gender</label></td>
            <td><input type="text" name="gender" value="<?php echo $row['gender'] ?>" ></td>
        </tr>
              <tr>
            <td><label>Department</label></td>
            <td><input type="text" name="dept" value="<?php echo $row['department'] ?>" ></td>
        </tr>
              <tr>
            <td><label>Qualification</label></td>
            <td><input type="text" name="qual" value="<?php echo $row['qualification'] ?>" ></td>
        </tr>
              <tr>
            <td><label>Experience</label></td>
            <td><input type="text" name="exp" value="<?php echo $row['experience'] ?>" ></td>
        </tr>
              <tr>
            <td><label>Email</label></td>
            <td><input type="text" name="email" value="<?php echo $row['email'] ?>" ></td>
        </tr>
              <tr>
            <td><label>Password</label></td>
            <td><input type="password" name="pass" value="<?php echo $row['password'] ?>" ></td>
        </tr>
           <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit"></td>
        </tr>

    </table>
    </form>

    <?php 
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $dept = $_POST['dept'];
    $qual = $_POST['qual'];
    $exp = $_POST['exp'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
     $editSql = "UPDATE staff SET name = '$name', address = '$address', gender = '$gender', department = '$dept', qualification = '$qual', experience = '$exp', email = '$email', password = '$pass' WHERE id = $id";
    $editResult = mysqli_query($con,$editSql);
    header('location:staffView.php');

}

     ?>
 
 </body>
 </html>