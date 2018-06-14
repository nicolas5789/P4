<?php
//l'index fait office de routeur

require("controller/controller.php"); //appel du controleur

if (isset($_GET["action"])) // si dans l'url index une action est présente alors affichage d'un post précis avec ses com
{
	if ($_GET["action"] == "listPosts") {
		listPosts();
		
	} elseif ($_GET["action"] == "post") {
		if (isset($_GET["id"]) && $_GET["id"] >0) {
			post();
		} else {
			echo "Erreur : aucun id de billet tranmis";
		}

	} elseif ($_GET["action"] == "addComment") {
		newComments($_GET["id"], $_POST["auteur"], $_POST["contenu"]);

	} elseif ($_GET["action"] == "admin") {
		admin();

	} elseif ($_GET["action"] == "addPost"){
		newPost($_POST["auteur"], $_POST["contenu"]);
	}

} else {
	listPosts();
}