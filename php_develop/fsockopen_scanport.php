<?php

	ini_set("max_execution_time", 120);

	$rangeStart  =  0;

	$rangeStop  =  1024;

	$target  =  "www.dicnocy.cn";

	$range  =  range($rangeStart,$rangeStop);

	echo "<p>Scan results for $target</p>";

	foreach ($range as $port ) {
		$result  =  @fsockopen($target,$port,$errno,$errstr,1);
		if ($result)
			echo "<p>Socket oprn at port $port</p>";
	}
?>