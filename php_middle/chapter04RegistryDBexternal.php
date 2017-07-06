<?php
	$read=new DBReadConnection;

	Registry::set($read);

	$write=new DBWriteConnection;

	Registry::set($write);

	$read=Registry::get('DbReadConnection');

	$write=Registry::get('DbWriteConnection');
?>