<html>
<title>AbleDrive - Sign Up </title>
<head><link rel="stylesheet" href="style.css"></head>
<body>
<center>
<center>
<img src="img/ict.png" width="5%" height="9%"><img src="img/logo.png" width="6%" height="9%">
<form><a href="index.php" class="link"><font color="white" class="hoverwhite">ABLE DRIVE</font></a></form>

<div class="signup_style">
	<form class="form_black">
		<font color="white">
		<h1>Sign Up</h1>
		Please fill in this form to create an account.
		</font><br><br>
	</form>
<br>
	<form action="success.php" method="post" class="form1">
	<label for="username_signup" ><b>Username</b></label><br>
		<input type="text" placeholder="Username..." name="usersign"  min="5" maxlength="30" pattern="([a-z].{5,})" title="Small Letters Only and At Least 6 Characters." required ><br><br>
		<label for="password_signup"><b>Password</b></label><br>
		<input type="password" placeholder="Password..." name="passsign"  min="5" maxlength="15" required><br>
		
		<p class="black" style="font-size:14px;"> <input type="checkbox" required> By creating an account, you agree to our <a href="" style="color:dodgerblue" id="href_style">Terms & Conditions</a>.</p>
		<button name="btn" type="submit" class="button">Sign Up</button><br><BR>
		<a onclick="window.location.href = 'login.php';" class="sign">Already have an account?</a>
	</form>
</div>
  
</center>
</body>
</html>