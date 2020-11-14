<?php
	if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] == "OK")
	{
		$file = '../private/passwd';
		$usr_data = unserialize(file_get_contents($file));
		$matches = false;
		foreach ($usr_data as $key => $user)
		{
			if ($user['login'] === $_POST['login'] && $user['passwd'] === hash('whirlpool', $_POST['oldpw']))
			{
				$usr_data[$key]['passwd'] = hash('whirlpool', $_POST['newpw']);
				file_put_contents($file, serialize($usr_data));
				$matches = true;
			}
		}
		if ($matches)
			echo "OK\n";
		else
			echo "ERROR\n";
	}
	else
		echo "ERROR\n";
?>
