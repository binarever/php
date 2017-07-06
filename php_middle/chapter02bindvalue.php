<?php
	$db_conn=new PDO('mysql:host=localhost;dbname=recipes','root');

	$sql='SELECT name,description FROM recipes WHERE chef=:chef AND category_id=:category_id';

	$stmt=$db_conn->prepare($sql);

	$stmt->bindValue(':chef','Lorna');
	$stmt->bindValue(':category_id',1);
	$stmt->execute();

	$starters=$stmt->fetch();

	$stmt->bindValue(':category_id',3);
	$stmt->execute();
	$pudding=$stmt->fetch();
?>