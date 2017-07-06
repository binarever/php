<?php

	$table  =  array("<b>"=>"<strong>","</b>"=>"</strong>");

	$html  =  "<b>Today In PHP-Power News</b>";

	echo strtr($html, $table);
	
?>