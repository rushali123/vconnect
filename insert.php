 /*it check for db connection and insert data in to respective table name.*/
<html>
	<body>
		<?php
 
			// Create connection
			$conn = new mysqli('localhost','root','');
 
			// Check connection
			if ($conn->connect_error)
		 	{
    				die("Connection failed: " . $conn->connect_error);
			} 
			echo "DB Connected successfully";
 
			// this will select the Database sample_db
			mysqli_select_db($conn,"sample_db");

			echo "\n DB is seleted as Test  successfully";
			if(!isset($_GET['fname']))
			{
				echo"cant reach";
			}
			$name=$_GET['fname'];



			$sql = "SELECT age, fname FROM sample_table WHERE fname=$name";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) 
			{
  				// output data of each row
   				if($row = $result->fetch_assoc()) 
    				{
        				echo "<br> age: ". $row["age"]. "  Name: ". $row["fname"]. "</br>";
    				}
			} 
			else 
			{
    				echo "0 results";
			}

			$conn->close();
 

		?>
	</body>
</html>