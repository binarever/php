<?php

	if (!isset($_SERVER['PHP_AUTH_USER'])||!isset($_SERVER['PHP_AUTH_PW']))
	{
		header('WWW-Authenticate:Basic Realm="Book Projects"');

		header("HTTP/1.1 401 Unauthorized");
	}

	else
	{
		echo "Your supplied username:".$_SERVER['PHP_AUTH_USER']."<br   />";
		echo "Your password:".$_SERVER['PHP_AUTH_PW']."<br   />";
	}
?>