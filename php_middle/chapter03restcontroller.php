<?php
	protected function readEvents(){
		$events=unserialize(file_get_contents($this->events_file));
		if(empty($events)){
			$events[]=array('title'=>'Summer Concert',
				'date'=>date('U',mktime(0,0,0,7,1,2012)),
				'capacity'=>'150');
			$events[]=array('title'=>'Valentine Dinner',
				'date'=>date('U',mktime(0,0,0,2,14,2012)),
				'capacity'=>'48');
			$this->writeEvents($events);
		}
		return $events;
	}

	protected function writeEvents(){
		file_put_contents($this->events_file, serialize($events));
		return true;
	}

	public function GETAction($request){
		$events=$this->readEvents();
		if(isset($request->url_elements[2])&&is_numeric($request->url_elements[2])){
			return $events[$request->url_elements[2]];
		}else{
			return $events;
		}
	}

	public function POSTAction($request)
	{
		$events=$this->readEvents();
		$event=array();
		$event['title']=$request->parameters['title'];
		$event['date']=$request->parameters['date'];
		$event['capacity']=$request->parameters['capacity'];

		$events[]=$event;
		$this->writeEvents($events);
		$id=max(array_keys($events));
		header('HTTP/1.1 201 Created');
		header('Location:/events/' . $id);
		return ' ';
	}

	public function PUTAction($request)
	{
		$events=$this->readEvents();
		$event=array();
		$event['title']=$request->parameters['title'];
		$event['date']=$request->parameters['date'];
		$event['capacity']=$request->parameters['capacity'];
		$id=$request->parameters['id'];
		$event['id']=$event;
		$this->writeEvents($events);
		header('HTTP 1.1 204 No Content');
		header('Location:/events/'. $id);
		return ' ';
	}

	public function DELETEAction($request)
	{
		$events=$this->readEvents();
		if(isset($request->url_elements[2]&&is_numeric($request->url_elements[2]))){
			unset($events[$request->url_elements[2]]);
			$this->writeEvents($events);
			header('HTTP 1.1 204 No Content');
			header('Location :/events');
		}

		return ' ';
	}
?>