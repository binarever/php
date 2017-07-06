<?php
	require("CarDecoratorclass.php");

	class NavigationSystem extends CarDecorator{
		public function getPrice(){
			return parent::getPrice()+1000;
		}
	};

	$car=new Car();
	$car=new NavigationSystem($car);
	echo $car->getPrice();
	
?>