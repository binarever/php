<?php

	$email  =  "2360566454@qq.com";

	$domain  =  explode("@", $email);

	$valid  =  checkdnsrr($domain[1],"ANY");

	if ($valid)
		echo "The domain exists!";
	else
		echo "Cannot locate MX record fo $domain[1]!";
?>