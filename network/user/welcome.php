<html>
	<head>
	<meta http-equiv="content-Type" content="text/html; charset=gb2312">
	<title>Welcome</title>
	</head>
	<body>
	<form method="post" action="checkans.php">
	<div class="div">
	id:<input type="text" name="id"></div>
	<div class="div">
	flag:<input type="text" name="flag"></div>
	<div class="button">
	<input type="submit" value="submit">
	</div>
	</form>
	<h4>
	<a href="competition.php">
	Click here to check your prize.
	</a>
	</h4>
	<h4>
	<a href="stuinfo.php">
	Click here to check your student information.
	</a>
	</h4>
	<h4><a href="http://127.0.0.1/network/user/edit.php">edit your information</a></h4>
<?php
	$conn=mysql_connect('localhost','root','') or die("Cannot connect to the database!");
	mysql_select_db('question');
	$query="SELECT * FROM questions";
	$result=mysql_query($query,$conn);
	while($row=mysql_fetch_row($result))
	{
		echo "<table>";
			echo "<tr>";
				echo "<td>";
				echo "id:";
				echo $row[0];
				echo "</td>";
				echo "<td>";
				echo "address:";
				echo $row[1];
				echo "</td>";
			echo "</tr>";
		echo "</table>";
	}
	mysql_free_result($result);
?>	
</body>
</html>