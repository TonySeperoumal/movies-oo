<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Movies OO | Accueil</title>
</head>
<body>
	<h1><a href="" title="Accueil">Movies OO</a> | Accueil</h1>
	
	<?php foreach ($movies as $movie): ?>
	<div class="movie">
		
		<a href="<?= ROOT_URL ?>details/?id=<?= $movie['id'] ?>"><?= $movie['title'] ?></a>

	</div>
	<?php endforeach; ?>

</body>
</html>