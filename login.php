<?php
session_start();
include ('database.php');
if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$pass = $_POST['pass'];

	$obj = new query();
	//$result = $obj->insertData($name,$email,$pass);

	$result = $obj->checkPass($email);
	if($result == $pass)
	{
		header("Location:profile.php");
		$_SESSION['login'] = $email;
	}	
	else
	{
		echo "Incorrect email id or password";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
	<h1>Login</h1>
	<form action = "login.php" method="post">
		<table>
			<tr>
				<td>Email id</td>
				<td><input type="Email" name="email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="pass"></td>
			</tr>
			<tr>
				<td><input type="submit" name="login"></td>
			</tr>
		</table>
	</form>

</body>
</html>