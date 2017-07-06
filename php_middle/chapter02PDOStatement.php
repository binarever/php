<?php
	$db_conn=new PDO('mysql:host=localhost;dbname=recipes','root');

	$stmt=$db_conn->query('SELECT name,chef FROM recipes');

	while ($row=$stmt->fetch()){
		echo $row['name'].'by'.$row[$chef]."\n";
	}

	$result=$stmt->fetch(PDO::FETCH_ASSOC);
	print_r($result);
?>