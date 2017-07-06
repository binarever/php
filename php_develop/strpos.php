<?php

	$substr  =  "index.html";

	$log  =  <<<logfile
	192.168.1.11:/www/htdocs/index.html:[2006/02/10:20:36:50]
	192.168.1.13:/www/htdocs/about.html:[2006/02/11:04:15:23]
	192.168.15:/www/htdocs/index.html:[2006/02/15:17:25]
logfile;

	$pos  =  strpos($log, $substr);

	$pos2  =  strpos($log, "\n",$pos);

	$pos  =  $pos + strlen($substr) + 1;

	$timestamp  =  substr($log, $pos,$pos2-$pos);

	echo "The file $substr was first access on :$timestamp";
?>