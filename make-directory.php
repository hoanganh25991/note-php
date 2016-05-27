<?php
/**
 * in PHP mkdir() allow to create a folder
 * BUT sometimes it doesn't work without third parameter
 */
mkdir("mkdir/from/php", 0777);
//better is
/** @warn why? */
mkdir("mkdir/from/php", 0777, true);