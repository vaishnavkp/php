<?php 
class myFun
{
	public function insertData($table,$fields,$values)
	{
		include('connection.php');
		$sql="insert into $table($fields)values($values)";
		mysqli_query($con,$sql);
	}
	public function selectData($table)
	{
		include('connection.php');
		$sql="select * from $table";
		return mysqli_query($con,$sql);
	}
	public function selectId($table,$id) 
	{
      include('connection.php');
      $sql = "SELECT * FROM $table WHERE reg_id = $id";
      return mysqli_query($con,$sql);
	}
  	public function updateData($table,$values,$id) 
  	{
        include('connection.php');
        $sql1 = "UPDATE $table SET $values WHERE reg_id = $id";
       mysqli_query($con,$sql1);
	}
	public function deleteData($table,$id)
	{
		 include('connection.php');
		 $sql = "DELETE FROM $table WHERE reg_id = $id";
		 mysqli_query($con,$sql);
	}
	public function login($table,$email,$pass)
	{
		include('connection.php');
		$sql="select * from $table where email='$email' and password='$pass'";
		return mysqli_query($con,$sql);
	}
	
}

?>