<?php

	$authorized  =  FALSE;

	if (isset($_SERVER['PHP_AUTH_USER'])&&isset($_SERVER['PHP_AUTH_PW'])){

		$authFile  =  file("/usr/local/lib/php/site/authenticate.txt");

		if (in_array($_SERVER['PHP_AUTH_USER'].":".md5($_SERVER['PHP_AUTH_PW'])."\n", $authFile))
			$authorized  =  TRUE;

	}

	if (!$authorized){
		header('WWW-Authenticate:Basic Realm="Secret Stash"');
		header('HTTP/1.0 401 Unauthorized');
		print('You must provide the proper credentials!');
		exit;
	}
?>