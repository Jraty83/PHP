#!/usr/bin/php
<?php
if ($argc == 4)
{
	$a = trim($argv[1]);	// don't really need to trim
	$operator = trim($argv[2]);
	$b = trim($argv[3]);	// don't really need to trim
	if ($operator == '+')
		$res = ($a + $b);
	if ($operator == '-')
		$res = ($a - $b);
	if ($operator == '*')
		$res = ($a * $b);
	if ($operator == '/')
		$res = ($a / $b);
	if ($operator == '%')
		$res = ($a % $b);
	echo "$res\n";
}
else
	echo "Incorrect Parameters\n";
?>
