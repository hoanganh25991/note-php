<?php
/**
 * @warn All string data must be UTF-8 encoded.
 * $string = "Anh Le Hoang";
 * utf8_encode($string) -> string format at utf8
 * @var array
 */
$arr = array("guest" => null, "editor" => array("guest", "staff"));
?>
<script type="application/javascript"
            src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
<input type="hidden" value='<?php echo json_encode($arr); ?>'>
<script type="text/javascript">
	var input = $("input");console.log(input);
</script>

