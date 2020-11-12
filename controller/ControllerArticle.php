<?php
	require("modele/dao/dao_authentification.php");

	class ControllerArticle
	{
		public function accueil()
		{
			$exampleDao = new ExampleDao();
			$data = $exampleDao->get_articles();
			require("web/affichage.php");
		}

		public function article($article)
		{
			$exampleDao = new ExampleDao();
			$data = $exampleDao->get_details_article($article);
			$details = true;
			require("web/affichage.php");
		}

		public function rubrique($rubrique)
		{
			$exampleDao = new ExampleDao();
			$data = $exampleDao->get_articles_rubrique($rubrique);
			require("web/affichage.php");
		}
	}
?>