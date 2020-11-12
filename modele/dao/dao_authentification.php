<?php
	class UsersDao
	{
		public function get_users()
		{
			require("connect_bd.php"); 
			
			$sql = "Select id, username, password, profil from compte_users";
			$query = $bdd->query($sql);
			$query->execute();
			$data = $query->fetchall(PDO::FETCH_OBJ);
			
			return $data;
        }

        public function get_user_profil($username)
		{
			require("connect_bd.php"); 
			
			$sql = "Select profil from compte_users where username='$username'";
            $query = $bdd->query($sql);
            $query->execute();
            $data = $query->fetchall();
        
			return $data;
        }
        
        public function authentify_users($username, $password)
		{
			require("connect_bd.php"); 
			
			$sql = "Select id, username, password, profil from compte_users where username='$username' and password='$password'";
			$query = $bdd->query($sql);
            
			return $query;
        }
        
	}

?>