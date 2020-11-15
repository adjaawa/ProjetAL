<?php
	class UsersDao
	{
		public function get_users()
		{
			require("connect_bd.php"); 
			
			$sql = "Select * from compte_users";
			$query = $bdd->query($sql);
			$query->execute();
			$data = $query->fetchall(PDO::FETCH_OBJ);
			
			return $data;
		}

		public function get_user_by_id($id)
		{
			require("connect_bd.php"); 
			
			$sql = "Select * from compte_users Where id='$id'";
			$query = $bdd->query($sql);
			$query->execute();
			$data = $query->fetchall(PDO::FETCH_OBJ);
			
			return $data;
		}

        public function get_user_profil($username)
		{
			require("connect_bd.php"); 
			
			$sql = "Select id, profil from compte_users where username='$username'";
            $query = $bdd->query($sql);
            $query->execute();
            $data = $query->fetchall();
        
			return $data;
		}

		public function update_user($prenom, $nom, $email, $username, $password, $profil, $id)
		{
			require("connect_bd.php"); 	

			$sql="UPDATE compte_users SET prenom = '$prenom', nom = '$nom', email = '$email', username = '$username', password = '$password', profil = '$profil' WHERE id='$id'";
			$query = $bdd->exec($sql);
			
			return $query;
		}


		public function delete_user($user)
		{
			require("connect_bd.php"); 	

			$sql="DELETE FROM compte_users WHERE id = '$user'";
			$query = $bdd->exec($sql);
			
			return $query;
		}


		public function add_user($prenom, $nom, $email, $username, $password, $profil)
		{
			require("connect_bd.php"); 
			
			$sql="INSERT INTO compte_users (prenom, nom, email, username, password, profil) VALUES('$prenom','$nom','$email','$username','$password','$profil')";
			$query = $bdd->query($sql);
			
			return $query;
		}
        
        public function authentify_users($username, $password)
		{
			require("connect_bd.php"); 
			
			$sql = "Select id, username, password, profil from compte_users where username='$username' and password='$password'";
			$query = $bdd->query($sql);
            $query->execute();
			$data = $query->fetchall(PDO::FETCH_ASSOC);
			
			return $query;
        }
        
	}

?>