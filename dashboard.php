<?php
//print_r($_POST);
//retrieve values
// array ([username] =>)

$user = $_POST ['username'];
$pass = $_POST ['password'];

if(strlen($user)==0 || strlen ($pass)==0){
	header("Location: form.php?error");
}
else {
	//check if the user and pass are correct
	
	//connect to db
	$conn = mysqli_connect("localhost", "root", "", "cms");
	//select db
		// happened ^ connect and select
	
	//check if connection is okay
	if (!$conn)//{
		echo "Error connecting to Mysql Server.";
	//}
	//else{
	//	echo "Ok!";}
	
	//prepare sql statement
	$sql = "SELECT* FROM users WHERE
			username='".$user."' AND password='".sha1($pass)."'";
	//echo $sql
	
	//execute sql
	$result = mysqli_query($conn, $sql);
	
	//process the result
	if($myrow=mysqli_fetch_array($result))
		echo "Ok";
	
	elseecho "You have entered an invalid username or password";	
	//display the result
}
	
?>