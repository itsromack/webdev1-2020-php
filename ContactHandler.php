<?php

class ContactHandler
{
	protected $db;
	public function __construct($connection)
	{
		$this->db = $connection;
	}

	public function getContacts()
	{
		$contacts = [];
		try {
			$sql = "SELECT * FROM contacts";
			$result = $this->db->query($sql);
			while ($row = $result->fetch_assoc()) {
				extract($row);
				$contact = new Contact(
					$first_name,
					$last_name,
					$address,
					$region,
					$zip,
					$age
				);
				$contact->setId($id);
				//$contacts[] = $contact;
				array_push($contacts, $contact);
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
		}
		return $contacts;
	}

	public function saveContact($contact)
	{
		$result = false;
		try {
			$sql = "INSERT INTO contacts (first_name, last_name, address, region, zip, age)
				VALUES (
					'{$contact->getFirstName()}',
					'{$contact->getLastName()}',
					'{$contact->getAddress()}',
					'{$contact->getRegion()}',
					'{$contact->getZip()}',
					'{$contact->getAge()}'
				)";
			$queryResult = $this->db->query($sql);
			if ($queryResult !== false) $result = true;
		} catch (Exception $e) {
			error_log($e->getMessage());
		}
		return $result;
	}
}
