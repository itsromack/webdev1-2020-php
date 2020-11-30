<?php

include_once("connect.php");
include_once("Contact.php");
include_once("ContactHandler.php");

$handler = new ContactHandler($connection);
$contacts = $handler->getContacts();
?>
<html>
<head>
<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">

        <div class="row">

<br>

<h1>Contacts <small><a class="btn btn-primary" href="form-test.php">Add New Contact</a></small></h1>


<table class="table table-hover">
<tr>
	<th scope="col">ID</th>
	<th scope="col">Full Name</th>
	<th scope="col">Address</th>
	<th scope="col">Age</th>
	<th scope="col">Birth Year</th>
</tr>

<?php foreach($contacts as $contact): ?>
<tr>
	<td><?php echo $contact->getId(); ?></td>
	<td scope="row"><?php echo $contact->getFullName(); ?></td>
	<td><?php echo $contact->getCompleteAddress(); ?></td>
	<td><?php echo $contact->getAge(); ?></td>
	<td><?php echo $contact->getBirthYear(); ?></td>
</tr>
<?php endforeach; ?>

</table>



	</div>
</div>

</body>
</html>
