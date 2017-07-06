<?php

	function validateEmail($email)
	{
		$regexp  =  "^([_a-z0-9]+)(\.[_a-z0-9-]+)*@([a-z0-9-]+)(.\[a-z0-9-]+)*(\.[a-z]{2,6})$";

		if (eregi($regexp, $email)) {
			# code...
			return 1;
		}

		else
			return 0;
	}

	if (isset($_POST['name'])) {
		# code...
		$name  =  htmlentities($_POST['name']);

		$email  =  htmlentities($_POST['email']);

		printf("Hi %s<br   />",$name);

		if (validateEmail($email)) {
			# code...
			printf("The address %s is valid!",$email);
		}

		else
			printf("The address <strong>%s</strong> is invalid!",$email);
		
	}
?>