<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<h3>Jquery Events</h3>
	<div id="div" style="background-color: blue;height: 300px;width: 500px;"></div>
	<img src="hansraj.jpg" alt="image" height="150px" width="200px" id="img">

</body>
<script type="text/javascript">
	$(document).ready(function(){
       $("#div").on("mouseenter",function(){
       	$(this).css("background-color","green");
       });
       $("#div").on("mouseleave",function(){
       	$(this).css("background-color","brown");
       });
       $("#div").on("click",function(){
       	$(this).css("background-color","yellow");
       });
       $("#div").on("dblclick",function(){
       	$(this).css("background-color","black");
       });

       $("#img").on("click",function(){
       	$(this).attr("height","250px");
       });
       $("#img").on("dblclick",function(){
       	$(this).attr("height","350px");
       });
       $("#img").on("mouseenter",function(){
       	$(this).attr("width","300px");
       });
       $("#img").on("mouseleave",function(){
       	$(this).attr("width","400px");
       });
	

	});

</script>
</html>