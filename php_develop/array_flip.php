<?php

	$entitles  =  get_html_translation_table(HTML_ENTITLES);

	$translate  =  array_flip($entitles);

	$string  =  "La pasta &eacute; il piatto pi&uacute; amato in Italia";

	echo strtr($string,$translate);
	
?>