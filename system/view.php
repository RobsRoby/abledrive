<?php
$username = $_GET['Username'];

?>
<html>
<title>AbleDrive - <?php echo $username;?>'s Drive</title>
<head><link rel="stylesheet" href="style.css"></head>
<body>
<br><br><Br>
<div>	
<form class="form_black">
<h1><font color="white"><?php echo $username;?>'s Drive</font><img src="img/gifs/drive.gif" width="5%" height="6%"></h1>
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
	<div>	
		<form action="admin.php">
			 <button type="submit">BACK</button> 
		</form>
	</div>	
</body>
</html>