<?php 
	class HomeController{
		public function index($pars){
			require("./private_space/views/MainView.php");
			MainView::render("./private_space/views/pages/home.php", $pars);	
		}
	}
?>
