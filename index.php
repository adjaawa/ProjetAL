 <?php
	require("controller/ControllerArticle.php");
	$controller_article = new controllerArticle();

	if (isset($_POST['article']) && !empty($_POST['article'])) 
	{
		$controller_article->article($_POST['article']);
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