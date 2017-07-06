<?php
	$db_conn=new PDO('mysql:host=localhost;dbname=recipes','php-user','secret');

	$stmt=$db_conn->query('SELECT name,chef FROM recipes');

	while ($row=$stmt->fetch())
	{
		echo $row['name'].'by'.$row['chef']."\n";
	}
?>