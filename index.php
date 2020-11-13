 <?php
	require("controller/ControllerArticle.php");
	require("controller/ControllerAuthentification.php");

	$controller_article = new controllerArticle();
	$controller_authentification = new ControllerAuthentification();
	 
	if(isset($_GET['deconnexion']))
	{ 
		if($_GET['deconnexion']==1)
		{  
			session_start();

			session_unset();
			session_destroy();
			header("location:index.php");
		}
	}
	else if (isset($_GET['gestion_articles'])) 
	{
		$controller_article->accueil();
	}
	else if (isset($_GET['creation_article'])) 
	{
		if (isset($_GET['post'])) 
		{
			$controller_article->ajouter_article();
		}
		else
		{
			$controller_article->accueil();
		}
	}
	else if (isset($_GET['modification_article'])) 
	{
		$controller_article->accueil();
	}
	else if (isset($_GET['creation_categorie'])) 
	{
		if (isset($_GET['post']) && isset($_POST['nom']) && isset($_POST['description'])) 
		{
			$controller_article->ajouter_categorie();
		}
		else
		{
			$controller_article->accueil();
		}
	}
	else if (isset($_GET['modification_categorie'])) 
	{
		if (isset($_GET['delete']) && isset($_POST['categorie'])) 
		{
			$controller_article->delete_categorie();
		}
		else if (isset($_GET['update']) && $_GET['update'] == 2) 
		{
			$controller_article->modifier_categorie();
		}
		else if (isset($_GET['update'])) 
		{
			$controller_article->accueil();
		}
		else 
		{
			$controller_article->accueil();
		}	
	}
	else if (isset($_POST['article']) && !empty($_POST['article'])) 
	{
		$controller_article->article($_POST['article']);
	}
	else if (isset($_SESSION['username'])) 
	{
		$controller_article->accueil();
	}
	else if (isset($_GET['connexion']) && !empty($_GET['connexion'])) 
	{
		$controller_authentification->connexion();
	}
	else
	{
		if (isset($_GET['rubrique']) && !empty($_GET['rubrique'])) 
		{
			$controller_article->rubrique($_GET['rubrique']);
		}
		else
		{
			$controller_article->accueil();
		}
	}
?>