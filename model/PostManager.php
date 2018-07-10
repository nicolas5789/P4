<?php
require_once("model/Database.php");

class PostManager extends Database
{
	//ajout d'un billet (CREATE)
	public function setPost($titre, $contenu)
	{
		$titreSafe = htmlspecialchars($titre);
		
		$bdd = $this->bddConnect();
		$addPost = $bdd->prepare("INSERT INTO billets(titre, date_creation, contenu) VALUES(?, NOW(), ?)");
		$sendPost = $addPost->execute(array($titreSafe, $contenu));

		return $sendPost; 
	}

	//obtention des billets (READ)
	public function getPosts() 
	{ 
		$bdd = $this->bddConnect();
		$posts = $bdd->query("SELECT id, DATE_FORMAT(date_creation, '%d-%m-%Y à %Hh%i') AS date_creation, contenu, titre FROM billets ORDER BY date_creation DESC");

		return $posts;
	}
	
	//modification d'un billet selon son id (UPDATE)
	public function changePost($titre, $contenu, $postId)
	{
		$titreSafe = htmlspecialchars($titre);

		$bdd = $this->bddConnect();
		$editPost = $bdd->prepare("UPDATE billets SET titre = ?, contenu = ? WHERE id = ?");
		$sendPost = $editPost->execute(array($titreSafe, $contenu, $postId));

		return $sendPost;
	}

	//suppression d'un billet selon son id (DELETE)
	public function deletePost($postId)
	{
		$bdd = $this->bddConnect();
		$req_deletePost = $bdd->prepare("DELETE FROM billets WHERE id= ?");
		$req_deletePost->execute(array($postId));

		return $req_deletePost;
	}

	//obtention d'un billet selon son id
	public function getPost($postId)
	{
		$bdd = $this->bddConnect();
		$req = $bdd->prepare("SELECT id, DATE_FORMAT(date_creation, '%d-%m-%Y à %Hh%i') AS date_creation, contenu, titre FROM billets WHERE id= ?");
		$req->execute(array($postId));
		$post = $req->fetch();

		return $post;
	}

	
}