<?php
$file = '../img/42.png';
$b64 = base64_encode(file_get_contents($file, FILE_USE_INCLUDE_PATH));
$successful = FALSE;

if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
	$username = $_SERVER['PHP_AUTH_USER'];
	$password = $_SERVER['PHP_AUTH_PW'];

	if ($username == 'zaz' && $password == 'Ilovemylittleponey')
		$successful = TRUE;
}
if (!$successful) {
	header('WWW-Authenticate: Basic realm="Member area"');
	header('HTTP/1.0 401 Unauthorized');
	echo "<html><body>That area is accessible for members only</body></html>\n";
	exit;
}
else {
	echo "<html><body>" . "\n" . "Hello Zaz<br />" . "\n";
	echo "<img src='data:image/png;base64,$b64'>\n";
	echo "</body></html>\n";
}
?>
