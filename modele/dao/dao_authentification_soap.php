<?php     
        // Les fonctionnalités de l'API SOAP
		function get_users_soap()
		{
			require("connect_bd.php"); 
			
			$sql = "Select * from compte_users";
			$query = $bdd->query($sql);
			$query->execute();
			$data = $query->fetchall(PDO::FETCH_ASSOC);

			return json_encode($data);
		}

		function add_user_soap($prenom, $nom, $email, $username, $password, $profil)
		{
			require("connect_bd.php"); 
			
			$sql="INSERT INTO compte_users (prenom, nom, email, username, password, profil) VALUES('$prenom','$nom','$email','$username','$password','$profil')";
			$query = $bdd->query($sql);
			
			return json_encode($query);
		}

		function delete_user_soap($user)
		{
			require("connect_bd.php"); 	

			$sql="DELETE FROM compte_users WHERE username = '$user'";
			$query = $bdd->exec($sql);
			
			return json_encode($query);
		}

		function update_user_soap($prenom, $nom, $email, $username, $password, $profil, $id)
		{
			require("connect_bd.php"); 	

			$sql="UPDATE compte_users SET prenom = '$prenom', nom = '$nom', email = '$email', username = '$username', password = '$password', profil = '$profil' WHERE id='$id'";
			$query = $bdd->exec($sql);
			
			return json_encode($query);
        }

?>