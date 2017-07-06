<?php
	class ObservableObject{
		private static $observers=array();

		public function observe(Observer $observer){
			$this->observers[]=$Observer;
		}

		public function dispatch($event){
			foreach($this->observers as $observer)
				$observer->notify($event);
		}
	};
?>