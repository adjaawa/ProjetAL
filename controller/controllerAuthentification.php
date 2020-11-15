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

			$rub = $exampleDao->get_categorie();
			require("web/affichage.php");
		} 
	}
?>