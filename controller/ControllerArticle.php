<?php
	require("modele/dao/dao_authentification.php");

	class ControllerArticle
	{
		public function accueil()
		{
			$exampleDao = new ExampleDao();
			$data = $exampleDao->get_articles();
			$categorie = $exampleDao->get_categorie();
			require("web/affichage.php");
		}

		public function ajouter_article()
		{
			$exampleDao = new ExampleDao();

			if (isset($_POST['titre']) && isset($_POST['categorie']) && isset($_POST['resume']) && isset($_POST['contenu'])) 
			{
				$titre = $_POST['titre'];
				$categorie = $_POST['categorie'];
				$resume = $_POST['resume'];
				$contenu = $_POST['contenu'];

				session_start();
				$id = $_SESSION['id'];

				$data = $exampleDao->post_article($titre, $categorie, $resume, $contenu, $id);

				header("Location:index.php?gestion_articles=1");
			}
		}

		public function delete_categorie()
		{
			$categorie = $_POST['categorie'];

			$exampleDao = new ExampleDao();
			$data = $exampleDao->delete_categorie($categorie);

			header("Location:index.php?modification_categorie=1&categorie=$categorie");
		}


		public function ajouter_categorie()
		{
			$exampleDao = new ExampleDao();

			$nom = $_POST['nom'];
			$description = $_POST['description'];

			$data = $exampleDao->post_categorie($nom, $description);

			header("Location:index.php?modification_categorie=1");
		}

		public function modifier_categorie()
		{
			$exampleDao = new ExampleDao();

			$id = $_POST['id'];
			$description = $_POST['description'];
			$nom = $_POST['nom'];

			$data = $exampleDao->update_categorie($id, $description, $nom);

			header("Location:index.php?modification_categorie=1");
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