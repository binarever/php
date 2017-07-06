<?php
	$line  =  "vim is the greatest word processor ever created";

	if(preg_match("/\bVim\b/i", $line))
		print "Match found !";
?>