<?php 

class database
{
	private $host;
	private $username;
	private $password;
	private $dbname;

	protected function connect()

	{
		$this->host = 'localhost';
		$this->username = 'root';
		$this->password = '';
		$this->dbname = 'training';
		$con = new mysqli($this->host,$this->username,$this->password,$this->dbname);
		return $con;
	}
}

class query extends database
{
	//you can make this function parameterized to use with another tables
	public function getData()
	{
		$sql = "SELECT * FROM user";
		$result = $this->connect()->query($sql);
		if($result->num_rows > 0)
		{
			$arr = array();
			while($row = $result->fetch_assoc())
			{
				$arr[] = $row;
				//return $arr;
				//print_r($arr);
			}
			return $arr;
			//return $result;
		}else{
			return 0;
		}
	}

	public function checkPass($email)//working fine
	{
	
		$sql = "SELECT password FROM user where email = '$email'";
		$result = $this->connect()->query($sql);
		if($result->num_rows > 0)
		{
			$arr = array();
			while($row = $result->fetch_assoc())
			{
				$arr[] = $row;
				//return $arr;
				//print_r($arr);
			}
			return $arr[0]["password"];
			//return $arr;
		}else{
			return 0;
		}
	}
	public function insertData($name,$email,$pass)
	{
		$sql = "INSERT INTO user (id,name,email,password) VALUES('NULL','$name','$email','$pass')";
		$conn = $this->connect();
		if ($conn->query($sql) === TRUE)
		{
			return 1;
		}

		else 
		{
			//echo "Error".$this->connect()->mysqli_error();
			echo "Error : ".$sql."<br>".$conn->error;
			return 0;
		}
	}


	public function getProfile($email)
	{
		$sql = "SELECT * FROM user where email = '$email'";
		$conn = $this->connect();
		$result = $conn->query($sql);
		if($result->num_rows > 0)
		{
			$arr = array();
			while($row = $result->fetch_assoc())
			{
				$arr[] = $row;
				//return $arr;
				//print_r($arr);
			}
			$conn->close();
			return $arr;
			//return $result;
		}else{
			return 0;
		}
	}


	public function updateData($name,$email,$pass,$oemail)
	{
		//updateData($name,$email,$pass,$oemail);

			$sql = "UPDATE user SET name ='$name',email='$email',password='$pass' WHERE email = '$oemail'";
			$conn = $this->connect();
			if ($conn->query($sql) === TRUE)
			{
				echo "data updated successfully!!";
				return 1;

			}

			else 
			{
				//echo "Error".$this->connect()->mysqli_error();
				echo "Error : ".$sql."<br>".$conn->error;
				return 0;
			}
	}
}
?>