<?php
		$filesize = filesize("asdfas.zip");
		echo $filesize;
$sql= "UPDATE inputs SET FileSize='$filesize' WHERE Username='asdfas'";
$db = mysqli_connect('localhost', 'root', '', 'users');
mysqli_query($db, $sql);
?>