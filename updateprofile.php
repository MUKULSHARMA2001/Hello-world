<?php
session_start();
include ('database.php');
if(!isset ($_SESSION['login']))
{
	header("Location:login.php");
}

$obj = new query();
$email = $_SESSION['login'];
$result = $obj->getProfile($email);
for($i = 0;$i<1;$i++)
{
	
	$oid=$result[$i]['id'];
	$oname=$result[$i]['name'];
	$oemail=$result[$i]['email'];
	$opass = $result[$i]['password'];
	
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>update profile</title>
</head>
<body>
	<p align="right"><a href="logout.php" align="right">Logout</a></p>

<form>
	<table>
		<tr>
			<td>
				Name : 
			</td>
			<td><input type="text" name="name" value="<?php echo $oname ?>"></td>
		</tr>
		<tr>
			<td>
				Email : 
			</td>
			<td><input type="emai" name="email" value=<?php echo $oemail ?>></td>
		</tr>
		<tr>
			<td>Password : </td>
			<td><input type="Password" name="pass" value=<?php echo $opass ?>></td>
		</tr>
		<tr>
			<td><input type="submit" name="update"></td>
		</tr>
	</table>
</form>
<?php
	if(isset($_POST['upadate']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];

		$obj = new query();
		$result = $obj->updateData($name,$email,$pass,$oemail);

	}
?>


</body>
</html>
