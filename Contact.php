<?php

class Contact
{
	private $first_name;
	private $last_name;
	private $address;
	private $region;
	private $zip;
	private $age;

	public function __construct(
		$first_name,
		$last_name,
		$address,
		$region,
		$zip,
		$age
	)
	{
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->address = $address;
		$this->region = $region;
		$this->zip = $zip;
		$this->age = (int) $age;		
	}

	public function getFullName()
	{
		return $this->first_name . ' ' . $this->last_name;
	}

	public function getCompleteAddress()
	{
		return $this->address . ' ' . $this->region . ' ' . $this->zip;
	}

	public function getFirstName()
	{
		return $this->first_name;
	}
	
	public function getLastName()
	{
		return $this->last_name;
	}

	public function getAddress()
	{
		return $this->address;
	}

	public function getRegion()
	{
		return $this->region;
	}

	public function getZip()
	{
		return $this->zip;
	}

	public function getAge()
	{
		return $this->age;
	}

	public function getBirthYear()
	{
		$yearToday = (int) date('Y');
		$birthYear = $yearToday - $this->age;
		return $birthYear;
	}
}







