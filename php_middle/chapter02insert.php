<?php
	$db_conn=new PDO('mysql:host=localhost;dbname=recipes','root');

	$sql='INSERT INTO recipes (name,description,chef,created) VALUES (:name,:description,:chef,NOW())';

	$stmt=$db_conn->prepare($sql);

	$stmt->execute(array(':name'=>'Weekday Risotto',
		':description'=>'Creamy rice-based dish,boosted by in-season ingredients. Otherwise known as \' raid-the-frige risotto \' ',
		':chef'=>'Lorna')
	);

	echo "New recipe id: ".$db_conn->lastInsertId();
?>