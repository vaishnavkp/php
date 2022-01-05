<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
   </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
</head>
<body>
	<h3>Jquery Validation</h3>
	<form method="post" id="frm">
		<table>
			<tr>
				<td><label>Name</label></td>
				<td><input type="text" name="name" id="name"></td>
				<td id="v_name"></td>
			</tr>
			<tr>
				<td><label>Email</label></td>
				<td><input type="text" name="email" id="email"></td>
				<td id="v_email"></td>
			</tr>
			<tr>
				<td><label>Password</label></td>
				<td><input type="password" name="pass" id="pass"></td>
				<td id="v_pass"></td>
			</tr>
			<tr>
				<td><label>Confirm password</label></td>
				<td><input type="password" name="cPass" id="cPass"></td>
				<td id="v_cPass"></td>
			</tr>
			<tr>
				<td><label>Message</label></td>
				<td><textarea name="msg" id="msg"></textarea></td>
				<td id="v_msg"></td>
			</tr>
			<tr>
				<td><label>Gender</label></td>
				<td>Male<input type="radio" name="gender" value="male">
				    Female<input type="radio" name="gender" value="female">
				</td>
				<td id="v_gender"></td>
			</tr>
			<tr>
				<td><label>Languages Known</label></td>
				<td>
					English<input type="checkbox" name="lang[]" value="english" id="lang1">
					Malayalam<input type="checkbox" name="lang[]" value="malayalam" id="lang2">
					Hindi<input type="checkbox" name="lang[]" value="hindi" id="lang3">
					Tamil<input type="checkbox" name="lang[]" value="tamil" id="lang4">
				</td>
				<td id="v_lang"></td>
			</tr>
			<tr>
				<td><label>District</label></td>
				<td><select id="dist" name="dist">
					<option disabled selected value="">Select district</option>
					<option value="Trivandrum">Trivandrum</option>
		 			<option value="Kollam">Kollam</option>
		 			<option value="pathanamthitta">Pathanamthitta</option>
		 			<option value="Alappuzha">Alappuzha</option>
		 			<option value="Kottayam">Kottayam</option>
		 			<option value="Ernakulam">Eranakulam</option>
		 			<option value="Idukki">Idukki</option>
		 			<option value="Thrissur">Thrissur</option>
		 			<option value="malappuram">Malappuram</option>
		 			<option value="palakkad">Palakkad</option>
		 			<option value="kozhikkode">Kozhikkode</option>
		 			<option value="wayanad">Wayanad</option>
		 			<option value="kannoor">Kannoor</option>
		 			<option value="kasargod">Kasargod</option>
				</select></td>
				<td id="v_dist"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" id="submit" value="Submit"></td>
			</tr>
		</table>
	</form>

</body>
<script type="text/javascript">
	$(document).ready(function(){
		$("#frm").validate({
			rules:{
				name:{
					required:true,
					minlength:2
				},
				email:{
					required:true,
					email:true
				},
				pass:{
					required:true,
					minlength:5
				},
				cPass:{
					required:true,
					equalTo:"#pass"
				},
				msg:{
					required:true
				},
				gender:{
					required:true
				},
				'lang[]':{
					required:true
				},
				dist:{
					required:true
				}

			}
		})
	})
</script>
</html>