<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div id="demo"></div>
	<h1>XMLHttpRequest Object</h1>
	
	<button type="button" onclick="loadDoc()">Change</button>

</body>
<script type="text/javascript">
	function loadDoc() {
		const xhttp = new XMLHttpRequest();
		xhttp.onload = function() {
           document.getElementById("demo").innerHTML = this.responseText;
		}
		xhttp.open("GET","index.php");
		xhttp.send();
	}
</script>
</html>