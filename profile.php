<?php
session_start();
include ('database.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ProfilePage</title>
</head>
<body>
<h1>Welcome</h1>
<p align="right"><a href="logout.php" align="right">Logout</a></p>

 <?php

if(!isset ($_SESSION['login']))
{
	header("Location:login.php");
}

echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th><th>pass</th></tr>   ";


$obj = new query();
$email = $_SESSION['login'];
$result = $obj->getProfile($email);


/*
foreach ($result as $row) {
	echo "<tr>";
	echo "<td>";
	echo implode("</td><td><input type='text' value='",$row);
	echo "'></td>";
	echo "</tr>";
} 
echo "</table>";
*/
echo ("<h2>Your current Details");

function print_row(&$item)
{
	echo("<tr>");
	array_walk($item,'print_cell');
	echo ("</tr>");
}
function print_cell(&$item)
{
	echo ('<td>');
	//echo ("<input type='text' name='name' value='$item'");
	echo ($item);
	echo ("</td>");
}
//echo ("<table border='1'>");
array_walk($result,'print_row');

echo ("</table>");
$_SESSION['data'] = $result;

?>
<br>
<a href="updateprofile.php">Update Details</a>
</body>
</html>