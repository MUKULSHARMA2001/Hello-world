<!DOCTYPE html>
<html>
	<head>
	<title>PHP script to Generate Multiplication table!</title>
	</head>
	<body bgcolor="gray">
		
				<h2>Generate Multiplication table using PHP !</h2>
				<hr />
				<div>
					<form method="post">
						  <input type="number" name="table_no" placeholder="Enter Table No." required></br></br>
						  <input type="submit"  />	
					</form>

			<?php 
				if(isset($_POST['table_no']) && $_POST['table_no'] != ''){
					echo "<h3>Result:</h3>";
					$table_no = $_POST['table_no'];
					for($i=1; $i<=10; ++$i)
					{
						echo "$table_no * $i = ".$table_no * $i ."<br />";
					}
				}
			?>
	</center>
	</body>
</html>