<?php
/**
 * THE MOST IMPORTANT:
 * >>>enctype="multipart/form-data"<<<
 */
if($_SERVER["REQUEST_METHOD"] == "POST"){
	var_dump("POST");
	var_dump($_FILES);
}
?>
<form method="POST" enctype="multipart/form-data">
	<input type="file" name="inputFile">
	<input type="submit" name="submit" value="save">
</form>
