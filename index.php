<?php
include_once './calculator.php';
$objcalc = new Calculator();

if (isset($_POST['PLUS'])) {
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$ans=$objcalc->add($num1, $num2);
}

?>
<html>
<head>
	<title>simple calculator</title>
</head>
<body>
<form method="post" action="index.php">
	<table border="4">
	<tr>
		<th>ENTER 1st NUMBER</th>
		<td><input type="text" name="num1"></td>
	</tr>
	<tr>
		<th>ENTER 2nd NUMBER</th>
		<td><input type="text" name="num2"></td>
	</tr>
	<tr>
		<th>ANSWERE</th>
		<td><input type="text" name="ans"></td>
	</tr>
	<tr>
		<td colspan="2">
			<input type="submit" name="PLUS" value="+">
			<input type="submit" name="MINUS" value="-">
			<input type="submit" name="MULTIPLICATION" value="*">
			<input type="submit" name="DIVISION" value="?">
		</td>
		
	</tr>
	</table>
</form>
</body>
</html>