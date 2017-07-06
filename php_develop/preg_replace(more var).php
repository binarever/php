<?php

	$draft  =  "In 2007 the company faced  plummenting revenues and scandal.";

	$keywords  =  array("/faced/","/plummenting/","/scandal/");

	$replacements  =  array("celebrated","skyrocketing","expansion");

	echo preg_replace($keywords, $replacements, $draft);
  ?>