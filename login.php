<?php 
session_start();
require 'config.php';
$conn = connection();
$_SESSION["username"] = $_POST['username'];
$_SESSION["password"] = $_POST['password'];
	// session_start();
// echo $_SESSION["username"];
// die;

$sql="SELECT * from users where username='".$_SESSION['username']."'
 and password='".$_SESSION['password']."'";
$result=$conn->query($sql);
// foreach ($result as $row) {
// 			echo $row['user_id']."<br>";
// 			echo $row['username']."<br>";
// 			echo $row['password']."<br>";
// 		}
		
// die;
if ( $result->rowCount() == 0 ) {
	// header("location: login.html");
	echo "<script>alert('Incorrect username or password');
	document.location='index.html'
	</script>";
}
elseif ( $result->rowCount() > 0 ) {
	if ($_SESSION["username"]=='admin'&&$_SESSION["password"]=='neola') {

		header('location:login.html');
	}
	elseif (isset($_SESSION["username"])&&isset($_SESSION["password"])) {
		foreach ($result as $row) {
			echo $row['user_id']."<br>";
			echo $row['username']."<br>";
			echo $row['password']."<br>";
		}
		// include 'header.php';
		header("location: index.php");
		// include 'footer.php';
	}
	
}

?>