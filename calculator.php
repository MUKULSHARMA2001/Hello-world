
<form action="calculator.php" method="post">
	<h2>Calculator</h2>
	<table border="2" style="background-color: pink">
		<tr>
			<td>Enter First Number:</td>
			<td><input type="text" name="fnumber"></td>
		</tr>
		<tr>
			<td>Enter Second number:</td>
			<td><input type="text" name="snumber"></td>
		</tr>
		<tr>
			<td><input type="submit" name="plus" value="+" style="width: 40px;background-color: skyblue;"><input type="submit" name="minus" value="-" style="width: 40px;background-color: skyblue;"><input type="submit" name="mul" value="*" style="width: 40px;background-color: skyblue;"><input type="submit" name="div" value="/" style="width: 40px;background-color: skyblue;"></td>
			<td><?php
            if (isset($_POST["plus"])) {
            	$fnumber = $_POST["fnumber"];
            	$snumber = $_POST["snumber"];
            	echo $fnumber+$snumber;
            }
            elseif (isset($_POST["minus"])) {
	            $fnumber = $_POST["fnumber"];
            	$snumber = $_POST["snumber"];
            	echo $fnumber-$snumber;
            }
            elseif (isset($_POST["mul"])) {
            	$fnumber = $_POST["fnumber"];
            	$snumber = $_POST["snumber"];
            	echo $fnumber*$snumber;
            }
            else{
                $fnumber = $_POST["fnumber"];
            	$snumber = $_POST["snumber"];
            	echo $fnumber/$snumber;
            }
            ?></td>
		</tr>
	</table>
	
</form>