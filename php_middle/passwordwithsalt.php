<?php
	$salt='?';
	$hash=hash_hmac('md5', $__POST['password'], $salt);
	$query='SELECT user_id FROM  users WHERE username=? AND password =?';
	$statement=$pdo->prepare($query);
	$statement->execute(array($__POST['username'],$hash));
?>