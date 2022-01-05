<?php 
include('connection.php');
include('function.php');
$obj= new myFun();
$id = $_GET['id'];
$obj->deleteData('register',$id);
header('location:viewData.php');

?>