<?php 
	
	ini_set('display_errors', '1');

	$text  =  "This is a link to http://www.wjgilmore.com";

	echo ereg_replace("http://([a-zA-Z0-9./-]+)$", "<a href=\"\\0\">\\0</a>", $text);

 ?>