#!/usr/bin/php
<?php
if ($argc > 1)
{
	$str = preg_split('/\s+/', trim($argv[1]));
	$first = $str[0];
	unset($str[0]);
	foreach($str as $value)
		echo "$value ";
	echo "$first\n";
}
?>
