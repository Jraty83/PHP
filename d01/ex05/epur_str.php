#!/usr/bin/php
<?php
if ($argc == 2)
{
	$value = preg_replace('/\s+/', ' ', trim($argv[1]));
		echo "$value\n";
}
?>
