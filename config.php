<?php 
	$autoload = function($class){
		require("./private_space/classes/$class.php");
	};

	spl_autoload_register($autoload);

	define("INCLUDE_PATH", "http://localhost/noticias/");
	
	define("HOST", "localhost");
	define("DB", "noticias");
	define("USER", "root");
	define("PASS", "");
?>
