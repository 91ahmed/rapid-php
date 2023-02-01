<?php
	
	define ('DS', DIRECTORY_SEPARATOR);
	define ('ROOT', __DIR__ . DS);

	require (ROOT.'services'.DS.'app'.DS.'services.php');

	$app = new \Services\App\Services(ROOT);
?>