<html>
<title>AbleDrive - Admin </title>
<head>
  <link rel="stylesheet" href="style.css">
</head>

<script type="text/javascript">
        window.history.forward();
        function noBack()
        {
            window.history.forward();
        }
</script>
<body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
	<br>
<center>
<img src="img/ict.png" width="5%" height="9%"><img src="img/logo.png" width="6%" height="9%">
<form><a href="index.php" class="link"><font color="white" class="hoverwhite">ABLE DRIVE</font></a></form>

<div class="login_style">
<form class="form_black">
	<h1><font color="white">Administrator</font></h1>
</form>
<br>
<form action="confirm.php" method="post" class="form1">
	<font size="4">
		<p>Username</p>
			<input id="user" type="text" placeholder="Username..."  name="user"  min="5" maxlength="30" required">
		<p>Password</p>
			<input id="pass" type="password"  placeholder="Password..." name="pass" min="5" maxlength="15" required>
		<br><br>
	<button id="btn" name="submit">Login</button>	
	</font>
</form>
</div>

</body>
</html>