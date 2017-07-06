<?php
	require ("Carclass.php");

	class CarDecorator extends AbstractCar{
		private var $targe;

		function __construct(Car $target){
			$this->target=$target;
		}

		public function getPrice(){
			return $target->getPrice();
		}

		public function getManufacturer(){
			return $target->getManufacturer();
		}
	};
?>