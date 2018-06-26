<?php

class Manager
{
	//connexion à la bdd
	protected function bddConnect()
	{
		try
		{
			$bdd = new PDO("mysql:host=localhost;dbname=blog_jean;charset=utf8", "root", "root");
			return $bdd;
		}
		//affichage si erreur
		catch(Exception $e)
		{
			die("Erreur : " . $e->getMessages());
		}
	}

	public function endSession()
	{
		session_strat();
		session_destroy();
	}
}