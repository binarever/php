<?php
	$xml='<concerts>
	<concert><title>The Magic Flute</title><time>1329636600</time></concert>
	<concert><title>Vivaldi Four Seasons</title><time>1329291000</time></concert>
	<concert><title>Mozart \' s Requiem</title><time>13310196400</time></concert>
	</concerts>';

	$concert_list=simplexml_load_string($xml);
	print_r($concert_list);
?>