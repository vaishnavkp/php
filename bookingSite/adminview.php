<?php 
session_start();
$con = mysqli_connect('localhost','root','','sampleDB');
$sql="SELECT * from reservation JOIN bookingsite ON reservation.user_id=bookingsite.id";
$result=mysqli_query($con,$sql);

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
            border: 1px solid black;
            border-collapse: collapse;
         }
     </style>
 </head>
 <body>
 <table>
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
        <tr>
            <th>Name</th>
            <th>Mobile</th>
            <th>Seat Type</th>
            <th>Seat NO.</th>
            <th>Status</th>
            
        </tr>
        <?php 
        
         while ($row = mysqli_fetch_array($result)) { 
            ?>
            <tr>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['contact_number'];?></td>
            <td><?php echo $row['seat_type']; ?></td>
            <td><?php echo $row['seat_No']; ?></td>
            <?php 
            if ($row['status'] == 0)
              { ?>
                 <td>Booked</td>
             <?php
              }
              else
              {?>
                <td>Confirm</td>
           <?php   }  ?>
            <td><a href="confirm.php?id=<?php echo $row['user_id']; ?>">Confirm</a></td>
        </tr>

        <?php  } ?>
        
        

    </table>
 
 </body>
 </html>