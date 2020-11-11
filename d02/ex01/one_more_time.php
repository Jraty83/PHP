#!/usr/bin/php
<?php
if ($argc == 2)
{
	date_default_timezone_set('Europe/Paris');

	$input = trim($argv[1]);
	$weekdays = "(lundi|mardi|mercredi|jeudi|vendredi|samedi|dimanche)";
	$months = "(janvier|février|mars|avril|mai|juin|juillet|août|septembre|octobre|novembre|décembre)";
	$hours = "[0-2][0-9]";
	$minutes = "[0-5][0-9]";
	$seconds = "[0-5][0-9]";
	$delimiters = "( |:)";

	if (preg_match("/^\b$weekdays\b \d{1,2} $months \d{4} $hours:$minutes:$seconds$/i", $input))
	{
		$arr = preg_split("/$delimiters/", $input);
		if ($arr[2] == janvier || $arr[2] == Janvier)
			$arr[2] = 1;
		if ($arr[2] == février || $arr[2] == Février)
			$arr[2] = 2;
		if ($arr[2] == mars || $arr[2] == Mars)
			$arr[2] = 3;
		if ($arr[2] == avril || $arr[2] == Avril)
			$arr[2] = 4;
		if ($arr[2] == mai || $arr[2] == Mai)
			$arr[2] = 5;
		if ($arr[2] == juin || $arr[2] == Juin)
			$arr[2] = 6;
		if ($arr[2] == juillet || $arr[2] == Juillet)
			$arr[2] = 7;
		if ($arr[2] == août || $arr[2] == Août)
			$arr[2] = 8;
		if ($arr[2] == septembre || $arr[2] == Septembre)
			$arr[2] = 9;
		if ($arr[2] == octobre || $arr[2] == Octobre)
			$arr[2] = 10;
		if ($arr[2] == novembre || $arr[2] == Novembre)
			$arr[2] = 11;
		if ($arr[2] == décembre || $arr[2] == Décembre)
			$arr[2] = 12;
		$epoch = mktime($arr[4], $arr[5], $arr[6], $arr[2], $arr[1], $arr[3]);
		echo "$epoch\n";
//		echo ($epoch-3600) . "\n";
	}
	else
		echo "Wrong Format\n";
}
?>
