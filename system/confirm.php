<?php 
$username = $_POST['user'];
$password = $_POST['pass'];
$realusername = 'admin';
$realpassword = '12345';

	if ($realusername === $username) {
			If ($realpassword !== $password) {
				header("Location:adminnot.php");
				}
			If ($realpassword === $password) {
				header("Location:admin.php");
		}
	}
	else {
		header("Location:adminnot.php");
	}
?>
