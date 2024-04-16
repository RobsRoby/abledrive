<html>
<title>AbleDrive - Your Drive</title>
<head><link rel="stylesheet" href="style.css"></head>
<body>
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



$username = $_POST['user'];
$password = $_POST['pass'];
session_start();
				$_SESSION['post-data'] = $_POST;
				$_POST = $_SESSION['post-data'];
$folder_name = "drives/$username";
?>
<center>
<img src="img/ict.png" width="5%" height="9%"><img src="img/logo.png" width="6%" height="9%">
<br>
</center>
<form>
<br>
<font size="10" color="#ff5c33">Welcome:&nbsp</font><font size="10" color="black">
<?php echo $username; ?></font>
<br><br>
</form>
<FORM>
<progress value="<?PHP echo folderSize($folder_name);?>" max="1073741824" style="width:100%;"></progress>
</FORM>

<?php 
include ('connection.php');
$user_check_query = "SELECT * FROM inputs WHERE username='$username'";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);		
if ($user['Username'] !== $username) {
			header("Location:notsignup.php");	
		}	
if ($user['Username'] === $username) {
			If ($user['Password'] !== $password) {
				header("Location:notmatch.php");
			}
			If ($user['Password'] === $password) {
			$folder= folderSize($folder_name);
			$sql= "UPDATE inputs SET size='$folder' WHERE Username='$username'";
			$db = mysqli_connect('localhost', 'root', '', 'users');
			mysqli_query($db, $sql);
?>

<div>	
<form class="form_black">
<h1><font color="white">Your Files</font><img src="img/gifs/drive.gif" width="5%" height="6%"></h1>
		
		<?php
	function convert_filesize($bytes, $decimals = 2){
    $size = array('B','kB','MB','GB','TB','PB','EB','ZB','YB');
    $factor = floor((strlen($bytes) - 1) / 3);
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor];
}
?>
		
		<?php
		$files = scandir("Drives/$username");
		$count= count($files);
		
		If ($count == '2'){
			echo "There are no files yet.";
			echo "<BR>";
		}
		else{
		?>
			<p>Documents</p>
		<?php
		for ($a = 2; $a < count($files);  $a++){
			$path = "drives/$username/$files[$a]";
			$ext = pathinfo($path, PATHINFO_EXTENSION);
		
				If ($ext === "xlsx" || $ext === "pptx" || $ext === "docx" || $ext === "ppt" || $ext === "pdf" || $ext === "pub"){
		?>
		<table align="center" width="100%">
		<tr>
		<?php
		$filename = "drives/$username/$files[$a]";
		if (file_exists($filename)) {
		?>
		<th align="center" width="30%"><p style="color:white;"><?php echo "Last modified: " . date ("F d Y H:i:s.", filemtime($filename));?></p></th>
		<th align="center" width="10%"><p style="color:white;"><?php echo convert_filesize($filename);?></p></th>
		<?php
		}
		?>
		<th align="center"><p style="color:white;"><?php echo $files[$a];?><p></th>
		<th width="10%"><a class="link" href="download.php?file=<?php echo $username;echo '/';echo $files[$a]; ?>">Download</a></th>
		<th width="10%"><a class="link" href="filedelete.php?path=<?php echo $username;echo '/';echo $files[$a]; ?>" onclick="return confirm('Are you sure you want to delete this file?')" target="_blank">Delete</a></th>
		</tr>
		</table>
		
		<?php
				}
			}	
		?>
		
		
			
		<br>
		<p>Audio Files</p>
		<?php
		
		for ($a = 2; $a < count($files);  $a++){
			$path = "drives/$username/$files[$a]";
			$ext = pathinfo($path, PATHINFO_EXTENSION);
		
				If ($ext === "mp3" || $ext === "3gp" || $ext === "wav" || $ext === "m4a" || $ext === "wma" || $ext === "aac" || $ext === "mp4" || $ext === "3gpp"){
		?>
		<table align="center" width="100%">
		<tr>
		<?php
		$size = filesize("drives/$username/$files[$a]");
		$filename = "drives/$username/$files[$a]";
		if (file_exists($filename)) {
		?>
		<th align="center" width="30%"><p style="color:white;"><?php echo "Last modified: " . date ("F d Y H:i:s.", filemtime($filename));?></p></th>
		<th align="center" width="10%"><p style="color:white;"><?php echo convert_filesize($size);?></p></th>
		<?php
		}
		?>
		<th align="center"><p style="color:white;"><?php echo $files[$a];?><p></th>
		<th width="10%"><a class="link" href="download.php?file=<?php echo $username;echo '/';echo $files[$a]; ?>">Download</a></th>
		<th width="10%"><a class="link" href="filedelete.php?path=<?php echo $username;echo '/';echo $files[$a]; ?>" onclick="return confirm('Are you sure you want to delete this file?')" target="_blank">Delete</a></th>
		</tr>
		</table>
		
		<?php
				}
			}			
		?>
		<br>
		<p>Video Files</p>
		<?php
		
		for ($a = 2; $a < count($files);  $a++){
			$path = "drives/$username/$files[$a]";
			$ext = pathinfo($path, PATHINFO_EXTENSION);
		
				If ($ext === "mp4" || $ext === "avi" || $ext === "mkv" || $ext === "flv" || $ext === "mov" || $ext === "wmv" || $ext === "mpg" || $ext === "mpeg" || $ext === "m4v" || $ext === "3gp"){
		?>
		<table align="center" width="100%">
		<tr>
		<?php
		$size = filesize("drives/$username/$files[$a]");
		$filename = "drives/$username/$files[$a]";
		if (file_exists($filename)) {
		?>
		<th align="center" width="30%"><p style="color:white;"><?php echo "Last modified: " . date ("F d Y H:i:s.", filemtime($filename));?></p></th>
		<th align="center" width="10%"><p style="color:white;"><?php echo convert_filesize($size);?></p></th>
		<?php
		}
		?>
		<th align="center"><p style="color:white;"><?php echo $files[$a];?><p></th>
		<th width="10%"><a class="link" href="download.php?file=<?php echo $username;echo '/';echo $files[$a]; ?>">Download</a></th>
		<th width="10%"><a class="link" href="filedelete.php?path=<?php echo $username;echo '/';echo $files[$a]; ?>" onclick="return confirm('Are you sure you want to delete this file?')" target="_blank">Delete</a></th>
		</tr>
		</table>
		
		<?php
				}
			}	
		?>
		<br>
		<p>Images</p>
		<?php
		
		for ($a = 2; $a < count($files);  $a++){
			$path = "drives/$username/$files[$a]";
			$ext = pathinfo($path, PATHINFO_EXTENSION);
		
				If ($ext === "jpeg" || $ext === "jpg" || $ext === "png" || $ext === "gif" || $ext === "tiff" || $ext === "psd" || $ext === "bmp" || $ext === "svg" || $ext === "exif" || $ext === "bat"){
		?>
		<table align="center" width="100%">
		<tr>
		<?php
		$size = filesize("drives/$username/$files[$a]");
		$filename = "drives/$username/$files[$a]";
		if (file_exists($filename)) {
		?>
		<th align="center" width="30%"><p style="color:white;"><?php echo "Last modified: " . date ("F d Y H:i:s.", filemtime($filename));?></p></th>
		<th align="center" width="10%"><p style="color:white;"><?php echo convert_filesize($size);?></p></th>
		<?php
		}
		?>
		<th align="center"><p style="color:white;"><?php echo $files[$a];?><p></th>
		<th width="10%"><a class="link" href="download.php?file=<?php echo $username;echo '/';echo $files[$a]; ?>">Download</a></th>
		<th width="10%"><a class="link" href="filedelete.php?path=<?php echo $username;echo '/';echo $files[$a]; ?>" onclick="return confirm('Are you sure you want to delete this file?')" target="_blank">Delete</a></th>
		</tr>
		</table>
		
		<?php
				}
			}	
		?>
		<br>
		<p>Others</p>
		<?php
		
		for ($a = 2; $a < count($files);  $a++){
			$path = "drives/$username/$files[$a]";
			$ext = pathinfo($path, PATHINFO_EXTENSION);
		If ($ext === "jpeg" || $ext === "jpg" || $ext === "png" || $ext === "gif" || $ext === "tiff" || $ext === "psd" || $ext === "bmp" || $ext === "svg" || $ext === "exif" || $ext === "bat" || $ext === "mp4" || $ext === "avi" || $ext === "mkv" || $ext === "flv" || $ext === "mov" || $ext === "wmv" || $ext === "mpg" || $ext === "mpeg" || $ext === "m4v" || $ext === "3gp" || $ext === "mp3" || $ext === "3gp" || $ext === "wav" || $ext === "m4a" || $ext === "wma" || $ext === "aac" || $ext === "mp4" || $ext === "3gpp" || $ext === "xlsx" || $ext === "pptx" || $ext === "docx" || $ext === "ppt" || $ext === "pdf" || $ext === "pub"){
		?>
		<?PHP
				} else {
		?>			
		<table align="center" width="100%">
		<tr>
		<?php
		$size = filesize("drives/$username/$files[$a]");
		$filename = "drives/$username/$files[$a]";
		if (file_exists($filename)) {
		?>
		<th align="center" width="30%"><p style="color:white;"><?php echo "Last modified: " . date ("F d Y H:i:s.", filemtime($filename));?></p></th>
		<th align="center" width="10%"><p style="color:white;"><?php echo convert_filesize($size);?></p></th>
		<?php
		}
		?>
		<th align="center"><p style="color:white;"><?php echo $files[$a];?><p></th>
		<th width="10%"><a class="link" href="download.php?file=<?php echo $username;echo '/';echo $files[$a]; ?>">Download</a></th>
		<th width="10%"><a class="link" href="filedelete.php?path=<?php echo $username;echo '/';echo $files[$a]; ?>" onclick="return confirm('Are you sure you want to delete this file?')" target="_blank">Delete</a></th>
		</tr>
		</table>
		<?php
				}
			}	
		}
		?>
		
		
		
		
		
		
		
		<br>
</form>
</div>	
 <br>
<CENTER>
	<div class="login_style">	
		<form action="Upload.php" target="_blank" method="POST" enctype="multipart/form-data" style="background:white;">
			<p>Upload a File</p><input type="file" name="file" style="background: #ff5c33;" required>
			<br><Br>
			<input name="username" type="hidden" value="<?php echo $username;?>">
			<input name="password" type="hidden" value="<?php echo $password;?>">
			<button name="submit" class="button" onclick="return confirm('If an identical file has been detected, it will be replaced. Do you wish to proceed?')">Submit</button>
		</form>
	</div>	
<br>
</CENTER>
	<div>	
		<form action="login.php">
			 <button type="submit" onclick="return confirm('Are you sure you want to Log Out?')" > Log Out</button> 
		</form>
	</div>	
<?PHP
			}
}
				?>

</body>
</html>