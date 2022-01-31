<?php 
	class CategoriaController{
		public function index($pars){
			require("./private_space/views/MainView.php");
			if($pars[1] == ""){
				MainView::render("./private_space/views/pages/categoria.php", $pars);
			}else{
				MainView::render("./private_space/views/pages/artigo.php", $pars);
			}
		}
	}
?>
