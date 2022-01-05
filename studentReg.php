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
    <h3>Student Registration</h3>
    <form method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
              <tr>
                <td>Address</td>
                <td><input type="text" name="address"></td>
            </tr>
              <tr>
                <td>Gender</td>
                <td><input type="text" name="gender"></td>
            </tr> 
             <tr>
                <td>Age</td>
                <td><input type="text" name="age"></td>
            </tr>
              <tr>
                <td>Course</td>
                <td><input type="text" name="course"></td>
            </tr>
              <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
              <tr>
                <td>Password</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type="file" name="image"></td>
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
           $address = $_POST['address'];
           $gender = $_POST['gender'];
           $age = $_POST['age'];
           $course = $_POST['course'];
           $email = $_POST['email'];
           $pass = $_POST['pass'];
           $image=basename($_FILES['image']['name']);
           move_uploaded_file($_FILES['image']['tmp_name'], "images/".$image);
          $sql = "INSERT INTO student(name,address,gender,age,image, course,email,password) VALUES('$name','$address','$gender','$age','$image','$course','$email','$pass')";
          $result = mysqli_query($con,$sql);
          header('location:studentView.php');

       }

     ?>
 
 </body>
 </html>