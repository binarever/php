<?php
	try{
		$db_conn=new PDO('mysql:host=localhost;dbname=recipes','root');
	}
	catch(PDOException $e){
		echo "Could not connect to database";
		exit;
	}

	try{
		$db_conn->beginTransaction();
		$db_conn->exec('UPDATE categories SET id=17 WHERE name="Pudding" ');

		$db_conn->commit();
	}
	catch(PDOException $e){
		$db_conn->rollBack();
		echo "Something went wrong : ".$e->getMessage();
	}
?>