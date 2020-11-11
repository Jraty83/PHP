#!/usr/bin/php
<?php
if ($argc > 1)
{
	unset($argv[0]);
	foreach($argv as $value)
	{
		$str = array_filter(explode(' ', $value));
		foreach($str as $value2)
			$arr[] = $value2;
	}
	if ($arr[0] != "")
	{
		sort($arr);
		foreach ($arr as $output)
			echo "$output\n";
	}
}
?>
