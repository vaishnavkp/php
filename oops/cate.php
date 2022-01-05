<?php
	$con=mysqli_connect("localhost","root","","sampledb");
	$sql="SELECT * FROM category";
	$result=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table tr td
		{
			padding: 3px;
			text-align: center;
			font-family: serif;
		}
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<form method="POST">
		<table align="center" width="400px">
			<tr>
				<td>
					<label for="category">Vehicle Category :  </label>
					<select name="cate" id="cate" class="form-control">
						<option disabled selected>--Select--</option>
						<?php
							while($row=mysqli_fetch_array($result))
							{
						?>
							<option value="<?php echo $row['id']; ?>"><?php echo $row['vehicle']; ?></option>	
						<?php
							}
						?>
					</select>
				</td>
				<td>
					<label for="sub">Vehicle Subcategory : </label>
					<select name="sub" id="sub" class="form-control">
						<option disabled selected>--Select--</option>
					</select>
				</td>
			</tr>
		</table>
	</form>
	
</body>
<script type="text/javascript">
	$(document).ready(function() {
        $('#cate').change(function(){
            $.ajax({
               type:'post',
               url:'subcate.php',
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