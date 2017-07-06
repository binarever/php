<?php
	$db_conn=new PDO('mysql:host=localhost;dbname=recipes','root');

	$sql='UPDATE recipes SET category_id =;id WHERE category_id is null';

	$stmt=$db_conn->prepare($sql);

	$stmt->execute(array(':id'=>2));

	echo $stmt->rowCount(). 'rows updated';
?>