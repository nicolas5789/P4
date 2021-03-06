<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Blog de Jean Forteroche, billets de son roman, récits d'aventures, billet simple pour l'alaska"/>
	<meta name="keywords" content="Blog, Jean Forteroche, aventure, roman, billet simple pour l'alaska"/>
	<meta name="twitter:card" content="summary"/>
	<meta name="twitter:url" content="http://lesaventuresdejean.sailtheweb.com/"/>
	<meta name="site" content="@lesaventuresdejean.sailtheweb.com"/>
	<meta property="og:title" content="Blog de Jean Forteroche"/>
	<meta property="og:description" content="Blog de Jean Forteroche, billet simple pour l'alaska"/>
	<meta property="og:type" content="website"/>
	<meta property="og:image" content="http://lesaventuresdejean.sailtheweb.com/public/images/aventurier.jpg"/>
	<meta property="og:url" content="lesaventuresdejean.sailtheweb.com"/>
	<link rel="icon" type="image/png" href="public/images/favicon.png" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<title><?= $title ?></title>
</head>

<body class="<?= $adminStyle ?>">
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<a class="navbar-brand" href="index.php?action=home">Accueil</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php?action=home">Mon Aventure<span class="sr-only"></span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php?action=blog">Le Blog<span class="sr-only"></span></a> 
				</li>
				<?php if(isset($_SESSION["access"]) && $_SESSION["access"] == "ok"): ?>
				<li class="nav-item">
					<a class="nav-link" href="index.php?action=admin">Administration<span class="sr-only"></span></a> 
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php?action=disconnect">Déconnexion</a> 
				</li>
				<?php endif; ?> 
			</ul>
		</div>
	</nav>

	<main>
		<div class="jumbotron">
			<div class="container" id="bloc_haut">
				<h1 class="display-3"> <?= $title_bloc ?> </h1>
				<p> <?= $description_bloc ?> </p>
				<p>
					<?= $lien ?>
				</p>
			</div>
		</div>
		<div class="container" id="bloc_centre">
			<div class="row">
				<div class="col-md-12">
					<div id="contenu">
						<?= $content ?>
					</div>
				</div>
			</div>
		</div>	
	</main>

	<footer class="container-fluid">
		<a href="index.php?action=formAccess" class="badge badge-dark">Espace administrateur</a>
		<p>Projet 4 - Développeur web junior - OpenClassroom</p>
	</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script src="public/js/tinyMce_Init.js"></script>

</body>
</html>