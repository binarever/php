<?php

	$recordexists  =  checkdnsrr("baidu.com","ANY");

	if ($recordexists)
		echo "The domain name has been reserved. Sorry!";
	else
		echo "The domain name is available!";
?>