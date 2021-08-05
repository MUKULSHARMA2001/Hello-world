<?php 
include ('database.php');
if(isset($_POST['reg']))
{
	$name = $_POST['name'];
	$email=$_POST['email'];
	$pass = $_POST['pass'];

$obj = new query();
$result = $obj->insertData($name,$email,$pass);

//echo " ".$result;

	//if($r.insertData($_POST['name'],$_POST['email'],$_POST['pass']))
	//{
		echo "REGISTRATION SUCCESS";
	//}
		echo " ".$result;
	
}



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
</head>
<body>
	<h1>Registration form</h1>
	<form method="post" action="register.php">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="Email" name="email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="pass"></td>
			</tr>
			<tr>
				<td><input type="submit" name="reg" value="Register"></td>
			</tr>
		</table>
	</form>

</body>
</html>