 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    $Username   = $_POST["user"];
	$Password = $_POST["password"];

 $sql= "UPDATE inputs SET Username='$Username', Password='$Password' WHERE Username='".$Username."' ";
 mysqli_query($conn, $sql)
 or die(mysqli_error()); 
 mysqli_close($conn);
 header('Location:admin.php')  
?>