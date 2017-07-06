<?php
	$password  =  "a12345";

	if (strcspn($password, "1234567890")==0) {
		# code...
		echo "Password cannot consist solely os numbers!";
	}
?>