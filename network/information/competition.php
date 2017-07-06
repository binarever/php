<!DOCTYPE html>
<html>
<head>
	<title>The information of competition</title>
</head>
<body>
<div>
<h1>
The competition information
</h1>
</div>
<div>
<?php
	$conn=mysql_connect('localhost','root','') or die("Cannot connect to the database!");
	mysql_select_db('question');

	$query="SELECT * FROM competition";

	$result=mysql_query($query,$conn);

	echo "<table border='1'>
		<tr>	
		<th>Name</th>
		<th>Student Number</th>
		<th>The competition</th>
		<th>Prize</th>	
		</tr>";

	while($row=mysql_fetch_row($result))
	{
		echo "<tr>";
  		echo "<td>" . $row[0] . "</td>";
  		echo "<td>" . $row[1] . "</td>";
  		echo "<td>" . $row[2] . "</td>";
  		echo "<td>" . $row[3] . "</td>";
  		echo "<td>" . $row[4] . "</td>";
 		echo "</tr>";
	}
	echo "</table>";
	
	mysql_free_result($result);
?>
</div>
<div>
<a href="yourprize.html">
if you have not add your information ,please click here!
</a>
</div>
</body>
</html>