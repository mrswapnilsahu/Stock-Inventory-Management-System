<?php 
require 'config.php';
$conn = connection();
$username=$_POST['username'];
$password=$_POST['password'];
$user_type=$_POST['user_type'];
	// session_start();
$sql="INSERT INTO `users` (`username`, `password`, `user_type`) VALUES ('$username', '$password', '$user_type');";
$result=$conn->query($sql);
die;
if ( $result->rowCount() == 0 ) {
	header("location: login.html");
	echo "<script>alert('Incorrect username or password');</script>";
}
elseif ( $result->rowCount() > 0 ) {
	
	if (isset($username)&&isset($password)) {
		foreach ($result as $row) {
			echo $row['user_id']."<br>";
			echo $row['username']."<br>";
			echo $row['password']."<br>";
		}
		// header("location: index.php");
	}
	
}

?>