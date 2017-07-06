<?php
	require_once 'Cache/Memcache.php';
	$cache=new Cache_Memcache();

	$key=$__SERVER['REQUEST_URI'];

	$data=$cache->get($key,'blog-pages');

	if($data!=false){
		echo $data;
	}else{
		ob_start();

		$data=ob_get_flush();

		$cache->set($key,$data,'blog-pages');
	}
?>