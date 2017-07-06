<?php

	$server  =  "www.dicnocy.cn";

	$count  =  3;

	echo "<pre>";

	system("/bin/ping -c $count $server");

	echo "</pre>";

	system("killall -q ping");
?>