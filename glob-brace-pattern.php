<?php
$indexFile = array_filter(glob('index.{html, php}', GLOB_BRACE), 'is_file');
var_dump($indexFile);