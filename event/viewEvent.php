<?php 
$con = mysqli_connect('localhost','root','','sampleDB');
$id = $_GET['id'];
$sql = "SELECT * FROM functions JOIN event ON functions.user_id = event.id WHERE user_id='$id'";
$result = mysqli_query($con,$sql);

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
            margin-top:450px;

        }
        .span {
            float: right;
        }
        table,th,td {
        	border: 1px solid black;
        	border-collapse: collapse;
        }
                </style>
 </head>
 <body>
    <header style="background-color: olivedrab;">WELCOME</header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            
            <li class="nav-item">
                <a href="viewRegUser.php" class="nav-link ">View Registered Users</a>
            </li>
            <li class="nav-item">
                <a href="addEvent.php" class="nav-link ">Add Event</a>
            </li>
            <li class="nav-item">
                <a href="logout.php" class="nav-link ">Logout</a>
            </li>

        </ul>
        
    </nav>
    <table>
    	<tr>
    		<th>Name of the event</th>
    		<th>Date</th>
    		<th>Place</th>
    		<th>status</th>
    		<th>Action</th>
    	</tr>
          <?php while ($row = mysqli_fetch_array($result)) {?>
          	<tr>
    		<td><?php echo $row['event']; ?></td>
    		<td><?php echo $row['dof']; ?></td>
    		<td><?php echo $row['place']; ?></td>
    		<td><?php 
                 if ($row['status'] == 0) {
                   	echo "Booked";
                   }  elseif($row['status'] == 1) {
                     echo "Confirmed";
                   } else {
                   	echo "Rejected";
                   }

    		 ?></td>
    		<td><a href="confirm.php?id=<?php echo $row['func_id']; ?>">confirm</a></td>
    	</tr>
       <?php   } ?>
    	
    </table>


<footer><span class="span">email id:event@gmail.com</span><br>
            <span class="span">ph:no- 9856741256</span>
    </footer>

</body>