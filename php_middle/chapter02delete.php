<?php
	$db_conn=new PDO('mysql:host=localhost;dbname=recipes','root');

	$stmt=$db_conn->prepare('DELETE FROM categories WHERE name=:name');

	$stmt->execute(array(':name'=>'Starter'));
	echo $stmt->rowCount().'row(s) deleted';
?>