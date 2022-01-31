<?php 
	require("./private_space/models/CategoriaModel.php");
	$posts_categoria = CategoriaModel::pega_posts_categoria($pars[0]);
?>

<h2>Posts com a categoria: <?= $pars[0];?></h2>
<ul>
	<?php foreach ($posts_categoria as $key => $value) {?>
		<li><?= $value['nome'];?> - <a href="<?= INCLUDE_PATH.$pars[0]."/".$value['slug'];?>">Ler</a></li>
	<?php }?>
</ul>
