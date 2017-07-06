<?php
	$request=new Request();
	$request->url_elements=array();
	if(isset($__SERVER['PATH_INFO'])){
		$request->url_elements=explode('/', $__SERVER['PATH_INFO']);
	}

	$request->verb=$__SERVER['REQUEST_METHOD'];

	switch ($request->verb){
		case 'GET':
			$request->parameters=$__GET;
			break;
		case 'POST':
			$request->parameters=$__POST;
			break;
		case 'PUT':
			$request->parameters=json_decode(file_get_contents('php://input'),1);
			break;
		case 'DELET':
			$request->parameters=json_decode(file_get_contents('php://input'),2);
			break;
		default:
			$request->parameters=array();
	}

	if($request->url_elements){
		$controller_name=ucfirst($request->url_elements[1]).'Controller';
		if(class_exists($controller_name)){
			$controller=new $controller_name();
			$action_name=ucfirst($request->verb)."Action";
		}else{
			header('HTTP/1.0 400 Bad Request');
			$response="Unknown Request";
		}
	}
?>