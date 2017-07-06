<?php
	
	$foods  =   array("pasta","steak","fish","potato");

	$food  =  preg_grep("/^p/", $foods);

	print_r($food);
	
  ?>