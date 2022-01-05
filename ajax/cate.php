<?php 
$con = mysqli_connect('localhost','root','','sampledb');
$sql = "SELECT * FROM category";
$result = mysqli_query($con,$sql);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<title></title>
 </head>
 <body>
 	<form method="post">
 		<table>
 			<tr>
 				<td><label>Vehicle Category :</label></td>
 				<td>
 					<select id="cate" name="cate">
 					<option disabled selected>Select category</option>
 					 <?php 
                       while ($row = mysqli_fetch_array($result)) { ?>
                       	<option value="<?php echo $row['id']; ?>"><?php echo $row['vehicle']; ?></option>
                       	
                     <?php    } ?>
                 </select>
 			</td>
 			</tr>
 			<tr>
 				<td><label>Sub category :</label></td>
 				<td>
 					<select name="sub" id="sub">
 						<option selected disabled>Select sub category</option>
 					</select>
 				</td>
 			</tr>
 		</table>
 	</form>
 
 </body>
 <script type="text/javascript">
 	$(document).ready(function(){
 		$('#cate').change(function(){
 			$.ajax({
 				type:'post',
 				url:'sub.php',
 				data:{
 					id:$('#cate').val()
 				},
 				success:function(result)
 				{
 					$('#sub').html(result);
 				}
 			});
 		});
 	});
 </script>
 </html>