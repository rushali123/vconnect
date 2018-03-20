<html>
<body>
<?php  
 require('db_connect.php');

if (isset($_POST['name']) and isset($_POST['age']))
{
	
// Assigning POST values to variables.
$fname = $_POST['name'];
$age = $_POST['age'];
echo "name:-".$fname;
echo "age:-".$age;

}
?>
<form>
<table>
<tr>
<td>details</td>
</tr>
<tr>
<td>age:- </td>
<td><output name=$age></output></td>
</tr>
<tr>
<td>name:-</td>
<td><output name ="$fname"></output></td>
</tr>
</table>
</form>
</body>
</html>