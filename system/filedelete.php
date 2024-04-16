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
$path = $_GET['path'];
unlink("drives/$path");
?>

<<script>
var delay = 3500; 
setTimeout(function(){window.opener = self;
      window.close();}, delay);
	  opener.location.reload(); 
	 
</script>
</body>
</html>