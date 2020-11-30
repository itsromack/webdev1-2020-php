<?php

include_once('connect.php');
include_once('Contact.php');
include_once('ContactHandler.php');

$handler = new ContactHandler($connection);

if (!empty($_POST)):

	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$address = $_POST["address"];
	$region = $_POST["region"];
	$zip = $_POST["zip"];
	$age = $_POST["age"];
	
	$formData = new Contact(
		$first_name,
		$last_name,
		$address,
		$region,
		$zip,
		$age
	);

	$result = $handler->saveContact($formData);
	if (!$result) exit('An error occured, unable to save contact to the database.');

?>
<h1>Thank you <?php echo $formData->getFullName(); ?> for submitting the form</h1>
<p>
We saved your address: "<?php echo $formData->getCompleteAddress(); ?>".
<br>You were born in <?php echo $formData->getBirthYear(); ?>
</p>

<a href="list-of-contacts.php">List of Contacts</a>

<?php else: ?>

The form is empty. <a href="form-test.php">Open Form</a>

<?php endif ?>


