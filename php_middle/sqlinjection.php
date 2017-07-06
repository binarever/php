<?php
	$query='SELECT user_id FROM  users WHERE username=? AND password =?';
	$statement=$pdo->prepare($query);
	$statement->execute(array($__POST['username'],md5($__POST['password'])));
?>