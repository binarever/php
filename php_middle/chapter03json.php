<?php
	$jsonData='[{"title":"The magic Flute","time":132963600},
	{"title":"Vivaldi Four Seasons","time":1329291000},
	{"title":"Mozart \'s Requiem","time":1330196400}]';

	$concerts=json_decode($jsonData,true);
	print_r($concerts);
?>