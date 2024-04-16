<html>
<title>AbleDrive - ADMIN </title>
<!-- ID NAMES | username_login , password_login -->
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<br>
<center>
<img src="img/ict.png" width="5%" height="9%"><img src="img/logo.png" width="6%" height="9%">
<form><a href="index.php" class="link"><font color="white" class="hoverwhite">ABLE DRIVE</font></a></form>

<div class="login_style">
	<form class="form_black">
		<h1><font color="white">Drives on this PC</font></h1>
	</form>	 				
		<br>
		<form action="delete.php" target="_blank" method="post">		
		<?php
		include ('connection.php');	
		if (!$db) {
		die("Connection failed: " . mysqli_connect_error());
		}
		
		$sql = "SELECT * FROM inputs";
        $result = mysqli_query($db, $sql);
		if (mysqli_num_rows($result) > 0) {
		?>
		<table align="center" >
			<tr>
				<th align="center" width="35%"><font size='5px' color="#ff5c33"><b>Drives<b></font></th>
				<th align="center" width="35%"><font size='5px' color="#ff5c33"><b>Password<b></font></th>
			</tr>
		<?php
			while($row = mysqli_fetch_assoc($result)) 
			{
		?>
			<TR>
				<TH align='center'><?php echo $row['Username']; ?></TH>
				<TH align='center'> <?php echo $row['Password']; ?></TH>
		
				<td color='Black' align="center"> <button onclick="return confirm('Do you want to delete this drive?')" name="username" value="<?php echo $row['Username'];?>" >Delete</button> </td>
				<td align="center"> <a class="button" href="edit.php?Username=<?php echo $row['Username']; ?>">Edit</a></td>
				<td align="center"> <a class="button" href="view.php?Username=<?php echo $row['Username']; ?>">View</a></td>
			</TR>
		<?php 
			} 
		
		} 
		else {
		?>
		<p color="black"><?php echo "NO ACCOUNTS AVAILABLE."; ?></p>
		<?php
		}
		
		mysqli_close($db);
		?>
		</table>
		</form>

	<br><br>

	<form action="adminlog.php" style="background:white;">
	<button onclick="return confirm('Are you sure you want to Log Out?')">Log Out</button>
	</form>
</div>

</body>
</html>