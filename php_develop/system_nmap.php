<?php

	$target  =  "www.dicnocy.cn";

	echo "<pre>";

	system("/usr/bin/nmap $target");

	echo "</pre>";

	system("killall -q nmap");
?>