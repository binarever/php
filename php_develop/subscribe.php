<?php

	if(isset($_POST['name']))
	{
		$name  =  htmlentities($_POST['name']);

		$email  =  htmlentities($_POST['email']);

		printf("Hi %s!<br   />",$name);

		printf("The address %s will soon be a spam-magnet!<br   />",$email);
	}
?>