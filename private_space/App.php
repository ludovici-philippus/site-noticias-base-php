<?php 
	$url = isset($_GET['url']) ? $_GET['url'] : "home";
	$url = explode("/", $url);

	$controller_name = ucfirst($url[0])."Controller";
	if($url[0] != "home")
		$controller_name = "CategoriaController";
	if(file_exists("./private_space/controllers/$controller_name.php")){	
		require("./private_space/controllers/$controller_name.php");
		$controller = new $controller_name();
		$controller->index($url);
	}else{
		die("Página não existe!");
	}
?>
