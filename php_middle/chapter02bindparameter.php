<?php
	$db_conn=new PDO('mysql:host=localhost;dbname=recipes','root');

	$sql='SELECT recipes.name,recipes.description,categories.name as category FROM recipes INNER JOIN categories ON categories.id WHERE recipes.chef =:chef AND categoris.name=:categoris.name';

	$stmt=$db_conn->prepare($sql);

	$stmt->bindValue(':chef','Lorna');
	$stmt->bindParam(':category_name',$category);

	$category='Starter';

	$stmt->execute();
	$starters=$stmt->fetchAll();

	$category='pudding';
	$stmt->execute();
	$pudding=$stmt->fetchAll();
?>