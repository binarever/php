<?php
	class Courier implements Countable
	{
		namespace shipping;
		protected $name;
		public $home_country;
		protected $data=array();

		public function __get($property)
		{
			return $this->data[$property];
		}

		public function __set($property,$value)
		{
			$this->data[$property]=$value;
			return true;
		}

		public function __construct($name)
		{
			$this->name=$name;
			return true;
		}

		function getName()
		{
			return $this->name;
		}

		function setName($value)
		{
			$this->name=$value;
			return true;
		}

		public function ship($parcel)
		{
			return true;
		}

		public function calculateShipping($parcel)
		{
			$rate=1.78;

			$cost=$rate*$parcel->weight;

			return $cost;
		}

		private function getShippingRateForCountry($country)
		{
			return 1.2;
		}

		public static function getCouriersByCountry($home_country)
		{
			return $courier_list;
		}

		$spanish_couriers=Courier::getCouriersByCountry('Spain');
	}

	interface Trackable
	{
		public function getTrackInfo($parcelId);
	}

	class MonotypeDelivery extends Courier implements Trackable
	{
		public function ship($parcel)
		{
			$parcelId=42;
			return $parcelId;
		}

		public function getTrackInfo($parcelId)
		{
			return (array("status"=>"in transit"));
		}
	}

	class PigeonPost extends Courier{
		public function ship($parcel)
		{
			return true;
		}
	}

	$courier=new Courier();
	$courier->name='Avian Carrier';
	echo $courier->name;
	$courier=new Courier();
	$courier->ship(new Parcel());
	$courier->ship(new Parcel());
	$courier->ship(new Parcel());
	echo count($courier);
?>