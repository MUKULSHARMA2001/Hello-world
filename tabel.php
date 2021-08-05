
<form action="tabel.php" method="post">
	<table border="1">
		<tr><td>Enter the Number: </td>
		    <td><input type="text" name="number"></td>
		<td><input type="submit" name="submit" value="show"></td></tr>
		<tr>
			<td></td>
			<td><?php 
                if (isset($_POST["submit"])) {
                	$number=$_POST["number"];
                	for ($i=1; $i <= 10; $i++) { 
                		echo  $number." * ".$i." = ".$number*$i."<br>";
                	}
                	
                }
			    ?></td>

         </tr>
	</table>
</form>