<html>
<title>AbleDrive - Deletingg.....</title>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<center>
<br>
<img src="img/logo.png" width="6%" height="9%">
<div style="color:black;font-size:20;font-family: Arial Black, Gadget, sans-serif;" class="login_style">
<img src="img/gifs/delete.gif" alt="Loading" height="70%" width="100%">
</div>
<br>
</form>
<?php
include ('connection.php');
$user = $_POST['username'];
$sql= "SELECT * FROM inputs WHERE Username='$user'";
$result = mysqli_query($db, $sql);
mysqli_num_rows($result);
while($row = mysqli_fetch_assoc($result)) 
		{
		$user = $row['Username'];
		}
		
// unlink("drives/$user");

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
	$sql="DELETE FROM inputs WHERE Username='$user' ";
	mysqli_query($db, $sql) or die(mysqli_error());
    mysqli_close($db);
	
$path= "drives/$user"; 
    function removeDirectory($path) {
 	$files = glob($path . '/*');
	foreach ($files as $file) {
		is_dir($file) ? removeDirectory($file) : unlink($file);
	}
	rmdir($path);
 	return;
}

removeDirectory("$path");
?>

<script>
var delay = 3500; 
setTimeout(function(){window.opener = self;
      window.close();}, delay);
	  opener.location.reload(); 
	 
</script>
</body>
</html>