<?php 
	class HomeModel{
		public static function pega_categorias(){
			$sql = MySql::connect()->prepare("SELECT * FROM `tb_categorias`");
			$sql->execute();
			return $sql->fetchAll();
		}
	}
?>
