/*It is designed to get input from user and pass the value to Insert.php*/
<?php
	if(isset($_POST['fname']))
	{
		$name=$_POST['fname'];
		$url="insert.php?fname=".$name;
		header("Location:" . $url);
		exit();
	}
?>
<html>
	<body>
		<h1>INSERT DATA INTO DATABASE USING PHP and MySQL with WAMP server</h1>
		<form action="insert.php" method="post">
			Name: <input type="text" name="fname" /><br><br>
			Age: <input type="int" age="age" /><br><br>
 
			<input type="submit" />
		</form>
	</body>
</html>
