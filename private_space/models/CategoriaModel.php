<?php 
	class CategoriaModel{
		public static function pega_posts_categoria($categoria_slug){
			$sql = MySql::connect()->prepare("SELECT * FROM `tb_noticias` WHERE categoria_slug=?");
			$sql->execute(array($categoria_slug));
			return $sql->fetchAll();
		}
	}
?>
