<?php
if (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 80)
{ 
	// your secure site:
	Header("Location: https://p.kb404.com/");
	exit;
}
else if (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)
{
	echo 'test<br>';
	if (isset($_SERVER['SERVER_PROTOCOL'])) echo $_SERVER['SERVER_PROTOCOL'].'<br>';
}
?>
