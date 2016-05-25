<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	var_dump($_POST);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>select optgroup</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-rc1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
	<style type="text/css">
		.level-1 {
			margin-left: 10px;
		}
	</style>
</head>
<body>
<form method="POST">
	<label for="selectSth">choose sth</label>
	<select id="selectSth" class="selectpicker" name="select">
		<optgroup label="optgroup level 1">
			<option>level a</option>
			<option>level b</option>
			<option>level c</option>
			<option>level d</option>
			<optgroup  label="optgroup level 2">
				<option class="level-1">level 3</option>
				<option>level 3</option>
				<option>level 3</option>
				<optgroup  label="optgroup level 3">
					<option>level 4</option>
				</optgroup>
			</optgroup>
		</optgroup>
		<option>level 1</option>
		<option>level 1</option>
		<option>level 1</option>
		<option>level 1</option>
		<option>level 1</option>
	</select>
	<input type="submit" name="submit" value="save">
</form>

</body>
</html>