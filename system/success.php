<html>
<title>AbleDrive - Yey! Success </title>
<head> <link rel="stylesheet" href="style.css"></head>
<body>
<center>
<img src="img/logo.png" width="6%" height="9%">
<br><form><a href="index.php" class="link"><font color="white" class="hoverwhite">Able Drive</font></a></form>
<div style="color:black;font-size:20;font-family: Arial Black, Gadget, sans-serif;" class="login_style">
<?php
$username= $_POST ["usersign"];
$password= $_POST ["passsign"];
	echo "<strong>";
	echo "Username:";
		echo "<br>";
		echo "$username";
		echo "<br><br><br>";
	echo "Password:";
		echo "<br>";
		echo "$password";
	echo "</strong>";
	?>
</div>


<br><br>
<div style="color:black;font-size:30;background:#ECF0F1;opacity:1;font-family: Arial Black, Gadget, sans-serif;" class="login_style">
	<img src="img/gifs/success.gif" alt="Smiley face" height="30%" width="30%">
	<?php
	include ('connection.php');
	$username = mysqli_real_escape_string($db, $_POST['usersign']);
	$password = mysqli_real_escape_string($db, $_POST['passsign']);

	$user_check_query = "SELECT * FROM inputs WHERE username='$username' LIMIT 1";
	$result = mysqli_query($db, $user_check_query);
	$user = mysqli_fetch_assoc($result);
		if ($user['Username'] === $username) {
			header("Location:unsuccess.php");
		die();
		}	
		else{
			$query = "INSERT INTO inputs (username, password) VALUES('$username', '$password')";
			mysqli_query($db, $query);

			If (!file_exists("drives/$username")) {
				mkdir("drives/$username", 0777, true);
			}
		}
?>
</div>

<br>

<form><a href="login.php" class="link"><font color="white" class="hoverwhite"> Login</font> </a></form>

</body>
</html>