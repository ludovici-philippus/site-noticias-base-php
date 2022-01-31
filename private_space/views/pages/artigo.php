<?php 
	require("./private_space/models/ArtigoModel.php");
	$info_post = ArtigoModel::pegar_info_noticia($pars[1]);
?>

<article>
	<h1><?= $info_post['nome'];?></h1>
	<p><?= $info_post['texto'];?></p>
</article>
