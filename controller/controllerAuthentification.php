<?php
	require("modele/dao/dao_example_dao.php");

	class ControllerAuthentification
	{
		public function connexion()
		{
			$usersDao = new UsersDao();
			$data = $usersDao->get_users();
			require("web/affichage.php");
        }
	}
?>