<?php

	session_start();
	$_SESSION['username']="jason";
	printf("Your name is :%s.<br   />",$_SESSION['username']);
	unset($_SESSION['username']);
	printf("Username now set to :%s",$_SESSION['username']);
?>