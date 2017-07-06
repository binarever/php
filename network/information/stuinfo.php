<!DOCTYPE html>
<html>
<head>
	<title>The information of student</title>
	<?php
		require("search.php");
	?>
</head>
<body>
<div id="header">
<h1>
The information of the students:
</h1>
</div>
<div id="content">
<?php
	$conn=mysql_connect('localhost','root','') or die("Cannot connect to the database!");
	mysql_select_db('question');

	if(!$_POST['search']){

		$query="SELECT * From stuclub";

		require("sturesult.php");

		mysql_free_result($result);
	}

if($_POST['search'])
{
	$search=$_POST['search'];
	$way=$_POST['way'];
	switch ($way) {
		case 'name':
			$query="SELECT * From stuclub WHERE name='$search'";

			require("sturesult.php");

			mysql_free_result($result);

			break;
		
		case 'phone':
			$query="SELECT * From stuclub WHERE phone='$search'";

			require("sturesult.php");

			mysql_free_result($result);

			break;

		case 'email':
			$query="SELECT * From stuclub WHERE email='$search'";

			require("sturesult.php");

			mysql_free_result($result);

			break;

		case 'stunum':
			$query="SELECT * From stuclub WHERE stunum='$search'";

			require("sturesult.php");

			mysql_free_result($result);

			break;

		case 'club':
			$query="SELECT * From stuclub WHERE club='$search'";

			require("sturesult.php");

			mysql_free_result($result);

			break;

		default:
			$query="SELECT * From stuclub WHERE day='$search'";

			require("sturesult.php");

			mysql_free_result($result);

			break;
	}
}
?>
</div>
<div id="footer" >
<a href="stuclub.php">
if you have not add your information ,please click here!
</a>
</div>
</body>
</html>