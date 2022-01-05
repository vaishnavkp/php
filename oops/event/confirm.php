<?php 

include('connection.php');
include('functions.php');
$obj= new myFun();
$id = $_GET['id'];
$confirm = "status = '1'";
$obj->confirm('functions',$confirm,$id);
header('location:viewRegUser.php');
?>