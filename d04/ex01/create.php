<?php
	if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] == "OK")
	{
		$dir = '../private';
		$file = '../private/passwd';
		if (!file_exists($dir))
			mkdir($dir);
		if (!file_exists($file))
			file_put_contents($file, null);
		$usr_data = unserialize(file_get_contents($file));
		foreach ($usr_data as $key => $user)
		{
			if ($user['login'] === $_POST['login'])
			{
				echo "ERROR\n";
				return ;
			}
		}
		$tmp['login'] = $_POST['login'];
		$tmp['passwd'] = hash('whirlpool', $_POST['passwd']);
		$usr_data[] = $tmp;
		file_put_contents($file, serialize($usr_data));
		echo "OK\n";
	}
	else
		echo "ERROR\n";
?>
