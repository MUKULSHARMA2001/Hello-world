<?php
include ('database.php');
$obj = new query();
//
		$obj = new query();
		$result = $obj->updateData('Mukul','mukul@mail.com','hello','mukul@sharma.com');

echo " ".$result;
//--------------------------------------------------------------------
//$result = $obj->getData();
//$result = $obj->checkPass('use2r@mail.com');
/*echo '<pre>';

print_r($result);


//var_dump($result);



echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th><th>pass</th></tr>   ";



foreach ($result as $row) {
	echo "<tr>";
	echo "<td>";
	echo implode('</td><td>',$row);
	echo "</td>";
	echo "</tr>";
} 
echo "</table>";

*/
//$row = mysqli_fetch_array($result)

?>