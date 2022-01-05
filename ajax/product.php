<?php 
$con = mysqli_connect('localhost','root','','sampledb');
$sql = "SELECT * FROM product";
$result = mysqli_query($con,$sql);



 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	<style type="text/css">
 		table,td,th {
 			border: 1px solid black;
 			border-collapse: collapse;
 		}
 	</style>
 </head>
 <body>
 	<form method="post">
 	<table>
 		<tr>
 			<th>id</th>
 			<th>productName</th>
 			<th>quantity</th>
 			<th>totalPrice</th>
 		</tr> 
 		<?php 
          while ($row = mysqli_fetch_array($result)) { ?>
         <tr>
 			<td><input type="hidden" name="pid" id="pid" value="<?php echo $row['id']; ?>"></td>
 			<td><?php echo $row['productName']; ?>
        <input type="hidden" name="tot" id="tot" value="<?php echo $row['totalPrice']; ?>">     
         <input type=hidden name="total" id="total" value="<?php echo $row['totalPrice']; ?>">      
            </td>
 			<td><input type="number" name="quant" class="quant" value="<?php echo $row['quantity']; ?>" min=1></td>
 			<td id="price"><?php echo $row['totalPrice']; ?> </td>

 		</tr>
          	
       <?php   } ?>
 		 
 		<!-- gsdfjtgwe rtfwef
        dnbfvesfgrh
        sndhfvesrhyfg -->
 	</table>
</form>
 
 
 </body>
 	<script type="text/javascript">
 		$(document).ready(function(){
            $(".quant").change(function(){
                var row = $(this).closest('tr');
                 
                var quant =  parseInt(row.find(this).val());    
                var price = parseInt(row.find('#tot').val());
                var total = parseInt(row.find('#total').val());
                var pid = parseInt(row.find('#pid').val());
               //alert(quant);
               // alert(price);
               var total = quant * price;
              // alert(total);
               row.find('#price').html(total);  
               row.find("#total").val(total);

            	$.ajax({
            		type:'post',
            		url:'view.php',
            		data:{
            			quantity: quant,
            			price: total,
                        id: pid
            		}
            	});
            });
 		});
 	</script>
 </html>