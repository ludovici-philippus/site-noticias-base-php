<?php 
	class MainView{
		public static function render($file, $pars="", $header="./private_space/views/pages/include/header.php", $footer="./private_space/views/pages/include/footer.php"){
			require($header);
			require($file);
			require($footer);
		}
	}
?>
