<?php
	$using_ssl=isset($__SERVER['HTTPS'])&&$__SERVER['HTTPS']=='on'||$__SERVER['SERVER_PORT']==443;
	if(!$using_ssl){
		header('HTTP/1.1 301 Moved Permanently');
		header('Location : http://'.$__SERVER['SERVER_NAME'].$__SERVER['REQUEST_URI']);
		exit;
	}
?>