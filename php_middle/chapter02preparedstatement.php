<?php
	$db_conn=new PDO('mysql:host=localhost;dbname=recipes','root');

	$sql='SELECT name,description,chef FROM recipes WHERE id=1 rectipe_id';

	$stmt=$db_conn->prepare($sql);

	$stmt->execute(array("recipe_id"=>1));

	$recipe=$stmt->fetch();
?>