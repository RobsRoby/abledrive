<html>
<title>AbleDrive - Uploading </title>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<center>
<br>
<img src="img/logo.png" width="6%" height="9%">
<div style="color:black;font-size:20;font-family: Arial Black, Gadget, sans-serif;" class="login_style">
<img src="img/gifs/upload.gif" alt="Loading" height="70%" width="100%">
</div>
<br>
</form>
<?php
function folderSize($dir){
$count_size = 0;
$count = 0;
$dir_array = scandir($dir);
  foreach($dir_array as $key=>$filename){
    if($filename!=".." && $filename!="."){
       if(is_dir($dir."/".$filename)){
          $new_foldersize = foldersize($dir."/".$filename);
          $count_size = $count_size+ $new_foldersize;
        }else if(is_file($dir."/".$filename)){
          $count_size = $count_size + filesize($dir."/".$filename);
          $count++;
        }
   }
 }
return $count_size;
}

$user = $_POST['username'];
$folder_name = "drives/$user";
$folder= folderSize($folder_name);
		
if (isset($_POST['submit'])){
	$FILE = $_FILES['file'];
	
	$filename = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$filenameError = $_FILES['file']['error'];
	$filenameType = $_FILES['file']['type'];
	
	If($filenameError === 0){
				$fileDestination = "drives/$user/".$filename;
				move_uploaded_file($fileTmpName, $fileDestination);
		}
		else{
			header("Location:Error.php");
		}
}

$path = "drives/$user/$filename";
If ($folder > 1073741824 ) {
	unlink($path);
	header("Location:Error.php");
}
?>
<script>
var delay = 3500; 
setTimeout(function(){window.opener = self;
	 window.close();}, delay); 
	 opener.location.reload(); 
	 
</script>
</body>
</html>