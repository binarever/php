<?php
	require ("AbstractCarclass.php");

	class Car extends AbstractCar{
		private var $price=16000;
		private var $manufacturer="Acme Autos";
		
		public function getPrice(){
			return $this->price;
		}

		public function getManufacturer(){
			return $this->manufacturer;
		}
	}
?>