<?php
	$request=new HttpRequest('http://api.bitly.com/v3/shorten?login=user&apiKey=secret&longUrl=http%3A%2F%2Fsitepoint.com');

	$request->send();

	$$result=$request->getResponseBody();

	print_r(json_decode($result));
?>