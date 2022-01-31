<?php
	require("./private_space/models/HomeModel.php");
	$categorias = HomeModel::pega_categorias();
?>

<h2>Home</h2>
<h3>Categorias</h3>
<ul>
	<?php foreach ($categorias as $key => $value) {?>
		<li><?= $value['nome']; ?> - <a href="<?= INCLUDE_PATH.$value['slug'];?>">Ver mais</a></li>
	<?php }?>
</ul>
