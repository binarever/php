<?php

	$pswd  =  "supersecret";

	$pswd2  =  "supersecret2";

	if (strcmp($pswd, $pswd2)!=0) {
		echo "Password do not match!";
	}
	else 
		echo "Password match!";
?>