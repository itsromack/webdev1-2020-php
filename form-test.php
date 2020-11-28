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

<form method="POST" action="form-handler.php">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault01">First name</label>
      <input name="first_name" id="first" type="text" class="form-control" value="Juan" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Last name</label>
      <input name="last_name" type="text" class="form-control" value="Dela Cruz" required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Address</label>
      <input name="address" type="text" class="form-control" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Region</label>
      <select name="region" class="custom-select" required>
        <option selected disabled value="">Choose...</option>
        <option>Region 1</option>
        <option>Region 2</option>
        <option>Region 3</option>
        <option>Region 4</option>
        <option>Region 5</option>
        <option>Region 6</option>
        <option>Region 7</option>
        <option>Region 8</option>
        <option>Region 9</option>
        <option>Region 10</option>
        <option>Region 11</option>
        <option>Region 12</option>
        <option>Region 13</option>
        <option>NCR</option>
        <option>ARMM</option>
      </select>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Zip</label>
      <input name="zip" type="text" class="form-control" id="validationDefault05" required>
    </div>
  </div>
  <div class="form-row">
    <div class="">
	<label>Age</label>
	<input name="age" type="number" class="form-control" />
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>

	</div>

</div>

</body>
</html>
