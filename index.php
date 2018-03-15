<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body><form action="login.php" method="POST">
		Login ID :<input type="text" name="username" placeholder="username"></br></br>
		PASSWORD :<input type="password" name="password" placeholder="password"></br>
		<input type="submit" value="Login">
	</form>
	<?php
			if(isset($_SESSION['id']))
				echo "you are logged in as ID number ".$_SESSION['id'];	
			else
				echo "you are not logged in";
	?>
	<br><hr><br>
	<form action="signup.php" method="POST">
		USERNAME :<input type="text" name="username" placeholder="username"></br></br>
		PASSWORD :<input type="password" name="password" placeholder="password"></br>
		<input type="submit" value="Sign Up">
	</form>
	<br><br><hr></hr>
	<form action="logout.php" method="POST">
		<input type="submit" value="Logout">
	</form>
</body>
</html>