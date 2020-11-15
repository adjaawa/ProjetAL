<?php
	require("modele/dao/dao_example_dao.php");
	

	class ControllerAuthentification
	{
		public function connexion()
		{
			$usersDao = new UsersDao();
			$exampleDao = new ExampleDao();
			$data = $usersDao->get_users();

			$rub = $exampleDao->get_categorie();
			require("web/affichage.php");
		}
		
		public function afficher_users()
		{
			$usersDao = new UsersDao();
			$exampleDao = new ExampleDao();
			$data = $usersDao->get_users();

			if(isset($_GET['id']))
			{
				$thisUser = $usersDao->get_user_by_id($_GET['id']);
				// var_dump($user);
			}

			$rub = $exampleDao->get_categorie();
			require("web/affichage.php");
		} 

		public function ajouter_user()
		{
			$exampleDao = new ExampleDao();
			$usersDao = new UsersDao();

			if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['username']) && isset($_POST['profil'])) 
			{
				$nom = $_POST['nom'];
				$prenom = $_POST['prenom'];
				$email = $_POST['email'];
				$username = $_POST['username'];
				$password = $_POST['password'];
				$profil = $_POST['profil'];

				$data = $usersDao->add_user($prenom, $nom, $email, $username, $password, $profil);

				header("Location:index.php?afficher_user=1");
			}
			else
			{
				header("Location:index.php?creation_user=1"); 
			}

		}

		public function modifier_user()
		{
			$exampleDao = new ExampleDao();
			$usersDao = new UsersDao();
			
			$id = $_GET['id'];
			$nom = $_POST['nom'];
			$prenom = $_POST['prenom'];
			$email = $_POST['email'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$profil = $_POST['profil'];

			$data = $usersDao->update_user($prenom, $nom, $email, $username, $password, $profil, $id);

			header("Location:index.php?modification_user=1");
		}


		public function delete_user()
		{
			$user = $_GET['id'];

			$usersDao = new UsersDao();
			$data = $usersDao->delete_user($user);

			header("Location:index.php?modification_user=1");
		}
	}
?>