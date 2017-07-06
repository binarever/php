<?php
	
	function acronym($matches)
	{

		$acronym  =  array(
			'WWW'=>'World Wide Web',
			'IRS'=>'Internal Revenue Service',
			'PDF'=>'Port Document Format'
			);

		if (isset($acronym[$matches[1]])) {
			return $matches[1]  .   "(".$acronym[$matches[1]].")";
		}
		else
			return $matches[1];

	}

	$text  =  "The <acronym>IRS</acronym> offers tax forms in <acronym>PDF</acronym> format on the <acronym>WWW</acronym>.";

	$newtext  =  preg_replace_callback("/<acronym>(.*)<\/acronym>/U", 'acronym', $text);

	print_r($newtext);
	  
  ?>