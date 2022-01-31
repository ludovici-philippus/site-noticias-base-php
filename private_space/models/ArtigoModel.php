<?php 
	class ArtigoModel{
		public static function pegar_info_noticia($slug){
			$sql = MySql::connect()->prepare("SELECT * FROM `tb_noticias` WHERE slug=?");
			$sql->execute(array($slug));
			return $sql->fetch();
		}
	}
?>
