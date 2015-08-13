<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Movies OO | Détails du film ...</title>
</head>
<body>
	<h1><a href="<? ROOT_URL ?>" title="Accueil">Movies OO</a> | Détails du film ...</h1>

	<div class="info_movie">
	<?php foreach ($movie as $key => $value): ?>
		
		<div><?= $key ?></div>	
		<div><?= $value ?></div>	

	<?php endforeach; ?>
	</div>
	
</body>
</html>