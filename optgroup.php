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
		.level-2 {
			margin-left: 20px;
		}
		.level-3{
			margin-left: 40px;
		}
	</style>
</head>
<body>
<form method="POST">
	<label for="selectSth">choose sth</label>
	<select id="selectSth" class="selectpicker" name="select">
		<option class="level-1">level 1</option>
		<option class="level-2">level 1</option>
		<option class="level-3">level 1</option>
		<option>level 1</option>
		<option>level 1</option>
	</select>
	<input type="submit" name="submit" value="save">
</form>

</body>
</html>