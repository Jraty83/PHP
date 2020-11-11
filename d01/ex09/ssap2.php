#!/usr/bin/php
<?php
function cmp($a, $b)
{
	$alnumchar = "abcdefghijklmnopqrstuvwxyz0123456789!\"
			#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
	if ($a == $b)
		return 0;
	else
	{
		for ($i = 0; $i < strlen($a) && $i < strlen($b); $i++)
		{
			$a_pos = stripos($alnumchar, $a[$i]);
			$b_pos = stripos($alnumchar, $b[$i]);
			if ($a_pos < $b_pos)
				return (-1);
			if ($a_pos > $b_pos)
				return (1);
		}
	}
}
if ($argc > 1)
{
	unset($argv[0]);
	foreach ($argv as $value)
	{
		$str = array_filter(explode(' ', $value));
		foreach($str as $value2)
			$arr[] = $value2;
	}
	if ($arr[0] != "")
	{
		usort($arr, "cmp");
		foreach($arr as $output)
			echo "$output\n";
	}
}
?>
