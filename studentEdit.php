<?php 
$con = mysqli_connect('localhost','root', '','sampleDB');
$id = $_GET['id'];
$sql = "SELECT * FROM student WHERE id = '$id'";
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
   <form method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $row['name'] ?>"></td>
            </tr>
              <tr>
                <td>Address</td>
                <td><input type="text" name="address" value="<?php echo $row['address'] ?>"></td>
            </tr>
              <tr>
                <td>Gender</td>
                <td><input type="text" name="gender" value="<?php echo $row['gender'] ?>"></td>
            </tr> 
             <tr>
                <td>Age</td>
                <td><input type="text" name="age" value="<?php echo $row['age'] ?>"></td>
            </tr>
            <tr>
                <td>Image</td>
               <td> <img src="images/<?php echo $row['image'];?>" height="50"></td>
                <td><input type="file" name="image"></td>
            </tr>
              <tr>
                <td>Course</td>
                <td><input type="text" name="course" value="<?php echo $row['course'] ?>"></td>
            </tr>
              <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $row['email'] ?>"></td>
            </tr>
              <tr>
                <td>Password</td>
                <td><input type="password" name="pass" value="<?php echo $row['password'] ?>"></td>
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
        $age = $_POST['age'];
        $course = $_POST['course'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
         $image=basename($_FILES['image']['name']);
           move_uploaded_file($_FILES['image']['tmp_name'], "images/".$image);
           if($image=="")
           {
            $sqlEdit = "UPDATE student SET name = '$name',address = '$address',gender = '$gender',age = '$age', course = '$course',email = '$email', password = '$pass' WHERE id = '$id'";
           }
            else
            {
                $sqlEdit = "UPDATE student SET name = '$name',address = '$address',gender = '$gender',age = '$age', image='$image',course = '$course',email = '$email', password = '$pass' WHERE id = '$id'";
            }
        mysqli_query($con,$sqlEdit);
        header('location:studentView.php');
    }

     ?>
 
 </body>
 </html>