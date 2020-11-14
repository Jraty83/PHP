<?php

function auth($login, $passwd) {
	$file = '../private/passwd';
	$usr_data = unserialize(file_get_contents($file));
	foreach ($usr_data as $key => $user)
	{
		if ($user['login'] === $login && $user['passwd'] === hash('whirlpool', $passwd))
			return (TRUE);
	}
	return (FALSE);
}
?>
