<?php

	$sentence  =  "The rain in Spain falls mainly on the plain";

	$chart  =  count_chars($sentence,1);

	foreach ($chart as $letter => $frequency) {
		# code...
		echo "Character ".chr($letter)." appears $frequency times<br  />";

	}

?>