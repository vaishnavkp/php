<?php 
$con = mysqli_connect('localhost','root','','sampledb');


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
 	<title></title>
 </head>
 <body>
 <form method="post" id="frm">
 	<table>
 		<tr>
 			<td><label>Name</label></td>
 			<td><input type="text" name="name" id="name"></td>
 		</tr>
 		<tr>
 			<td><label>Address</label></td>
 			<td><input type="text" name="address" id="address"></td>
 		</tr>
 		<tr>
 			<td><label>City</label></td>
 			<td><input type="text" name="city" id="city"></td>
 		</tr>
 		<tr>
 			<td><label>State</label></td>
 			<td><input type="text" name="state" id="state"></td>
 		</tr>
 		<tr>
 			<td><label>Pincode</label></td>
 			<td><input type="text" name="pin" id="pin"></td>
 		</tr>
 		<tr>
 			<td><label>Mobile</label></td>
 			<td><input type="text" name="mobile" id="mobile"></td>
 		</tr>
 		<tr>
 			<td><label>Email</label></td>
 			<td><input type="text" name="email" id="email"></td>
 		</tr>
 		<tr>
 			
 			<td><label>Password</label></td>
 			<td><input type="password" name="pass" id="pass"></td>
 		</tr>
 		<tr>
 			<td></td>
 			<td><input type="submit" name="submit" id="reg" value="Register"></td>
 		</tr>
 	</table>
 </form>
 </body>
 <script type="text/javascript">
 	$(document).ready(function(){
         $("#frm").validate({
            rules: {
                name: {
                    required: true,
                    minLength: 2
                },
                
            }
         })
       $('#reg').click(function(){
       //alert('hi')

      var name=$("#pass").val()
      //alert(name)
           $.ajax({
              type:'post',
              url:'reg.php',
              data:{
                name:$("#name").val(),
                address:$("#address").val(),
                city:$("#city").val(),
                state:$("#state").val(),
                pincode:$("#pin").val(),
                mobile:$("#mobile").val(),
                email:$("#email").val(),
                password:$("#pass").val()
              },
               success:function(result)
               {
                //alert(result)
               }
              
           });
       });
 	});

 </script>
 </html>