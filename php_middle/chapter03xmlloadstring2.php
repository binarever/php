<?php
	$xml='<concerts>
	<concert><title>The Magic Flute</title><time>1329636600</time></concert>
	<concert><title>Vivaldi Four Seasons</title><time>1329291000</time></concert>
	<concert><title>Mozart \' s Requiem</title><time>13310196400</time></concert>
	</concerts>';

	$concert_list=simplexml_load_string($xml);
	
	echo "<table>\n";
	foreach ($concert_list as $concert){
		echo "<tr>\n";
		echo "<td>".$concert->title."</td>\n";
		echo "<td>".date('g:i ,jS M',(string)$concert->time)."</td>\n";
		echo "</tr>\n";
	}

	echo "</table>\n";
	echo "Featured Concert:".$concert_list->concert[1]->title; 
?>