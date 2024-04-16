<html>
<title>AbleDrive - Login </title>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<br>
<center>

<img src="img/logo.png" width="6%" height="9%">
<form><a href="index.php" class="link" ><font color="white" class="hoverwhite" >Able Drive</font></a></form>
<!-- loginform -->
<CENTER>
	 				
<br>
<?php
$username= $_GET['Username'];
$sql= "SELECT * FROM inputs WHERE Username='$username' ";
include('connection.php');
$result = mysqli_query($db, $sql);
mysqli_num_rows($result);

while($row = mysqli_fetch_assoc($result)) 
		{
?>
<form class="form_black">
<h1><font color="white">Edit Password</font></h1>
</form>
<form action="editdata.php" method="post" style="background:white;">
<br><input type="hidden" name="user" value="<?php echo $row['Username']; ?>">
<p>Password:</p><input type="text" name="password" value="<?php echo $row['Password']; ?>"><br><BR><br>
<a href="admin.php" class="button" >Back</a>
<input type="submit" value="Update" class="button" onclick="return confirm('Your record is about to be updated. Are you sure you wish to continue?')">
</form>

<?php
		}
?>
</center>
</body>
</html>

