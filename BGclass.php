<?php
class Human
{
	private $name;
	private $age;
	
	public function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}
	
	public function getName()
	{
		return $this->name;
	}
	public function getAge()
	{
		return $this->age;
	}
}

class Girl extends Human
{
	private $boobs;
	private $butt;
	
	public function __construct($name, $age, $boobs, $butt)
	{
		parent :: __construct($name, $age);
		$this->boobs = $boobs;
		$this->butt = $butt;
	}
	public function getBoobs()
	{
		return $this->boobs;
	}
	public function getButt()
	{
		return $this->Butt;
	}
}

class Boy extends Human
{
	private $dick;
	private $balls;

	public function __construct($name, $age, $dick, $balls)
	{
		parent :: __construct($name, $age);
		$this->dick = $dick;
		$this->balls = $balls;
	}
	public function getDick()
	{
		return $this->dick;
	}
	public function getBalls()
	{
		return $this->Balls;
	}
}
