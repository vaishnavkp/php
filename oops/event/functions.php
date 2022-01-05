<?php 
class myFun
{
    public function insertData($table,$fields,$values)
    {
    	include('connection.php');
    	$sql = "INSERT INTO $table($fields)VALUES($values)";
    	mysqli_query($con,$sql);
    }
    public function login($table,$email,$pass)
    {
        include('connection.php');
        $sql = "SELECT * FROM $table WHERE email = '$email' AND password = '$pass'";
        return mysqli_query($con,$sql);
    }
    public function view($table,$id)
    {
        include('connection.php');
        $sql = "SELECT * FROM $table WHERE id = $id";
        return mysqli_query($con,$sql);
    }
    public function viewStatus($table,$table2,$id)
    {
        include('connection.php');
        $sql = "SELECT * FROM $table JOIN $table2 ON functions.user_id = event.id WHERE id = $id";
        return mysqli_query($con,$sql);
    }
    public function bookEvent($table)
    {
        include('connection.php');
        $sql = "SELECT * FROM $table";
        return mysqli_query($con,$sql);
    }
    public function insertEvent($table,$fields,$values)
    {
        include('connection.php');
        $sql = "INSERT INTO $table($fields)VALUES($values)";
        mysqli_query($con,$sql);
    }
    public function updateProfile($table,$update,$id)
    {
        include('connection.php');
        $sql = "UPDATE $table SET $update WHERE id = $id";
        mysqli_query($con,$sql);
    }
    public function adminLogin($table,$email,$pass)
    {
        include('connection.php');
        $sql = "SELECT * FROM $table WHERE email = '$email' AND password = '$pass'";
        return mysqli_query($con,$sql);
    }
    public function regUsers($table){
        include('connection.php');
        $sql = "SELECT * FROM $table";
        return mysqli_query($con,$sql);
    }
    public function viewEvent($table,$table2,$id)
    {
        include('connection.php');
        $sql = "SELECT * FROM $table JOIN $table2 ON functions.user_id = event.id WHERE id = $id";
        return mysqli_query($con,$sql);
    }
    public function confirm($table,$confirm,$id)
    {
        include('connection.php');
        $sql = "UPDATE $table SET $confirm WHERE func_id = $id"; 
        mysqli_query($con,$sql);
    }
    public function addEvent($table,$fields,$values)
    {
         include('connection.php');
         $sql = "INSERT INTO $table($fields)VAlUES($values)";
         mysqli_query($con,$sql);
    }



}

 ?>