<?php

	session_start();
	$_SESSION['username']="jason";
	printf("Your name is %s.",$_SESSION['username']);
?>