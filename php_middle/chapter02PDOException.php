<?php
	try{
		$db_conn=new PDO('mysql:host=localhost;dbname=recipes','root');
	}
	catch(PDOException $e){
		echo "Could not connect to the database";
	}
?>