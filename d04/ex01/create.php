<?php
//	if (isset($_POST['submit'])) {		is good, but doesn't specify the value as "OK"...
if ($_POST['login'] == "" || $_POST['passwd'] == "" || $_POST['submit'] != "OK")
	echo "ERROR\n";
else
{
	$serialized = array();
	$username = $_POST['login'];
	$password = $_POST['passwd'];
	$dir = '../private';
	$file = '../private/passwd';

	if (!file_exists($file))	// if ../private/passwd FILE doesn't exist
	{
		if (!file_exists($dir))			// if ../private DIR doesn't exist
			mkdir('../private', 0777, true);	// create the directory
		$serialized = serialize($file);
		file_put_contents($file, $serialized, FILE_APPEND);
		
		hash('whirlpool', $password);
	}
	else						// if ../private/passwd file ALREADY exists!
	{
		$usr_data = file_get_contents($file, true);

//		foreach ($serialized as $pw)
	
	}
	echo "OK\n";
}
?>
