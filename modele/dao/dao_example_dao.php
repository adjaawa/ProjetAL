<?php
	class ExampleDao
	{
		public function get_articles()
		{
			require("connect_bd.php"); 
			
			$sql = "Select id, titre, resume, date_pub from articles";
			$query = $bdd->query($sql);
			$query->execute();
			$data = $query->fetchall(PDO::FETCH_OBJ);
			
			return $data;
		}

		public function get_article_by_id($id)
		{
			require("connect_bd.php"); 
			
			$sql = "Select id, titre, resume, date_pub from articles Where id = '$id'";
			$query = $bdd->query($sql);
			$query->execute();
			$data = $query->fetchall(PDO::FETCH_OBJ);
			
			return $data;
		}

		public function get_categorie()
		{
			require("connect_bd.php"); 
			
			$sql = "Select * from categories";
			$query = $bdd->query($sql);
			$query->execute();
			$data = $query->fetchall(PDO::FETCH_OBJ);
			
			return $data;
		}


		public function post_article($titre, $categorie, $resume, $contenu, $id)
		{
			require("connect_bd.php"); 

			$sql="INSERT INTO articles (titre, resume, contenu, date_pub, id_auteur, id_categorie) VALUES(:titre,:resume,:contenu,now(),:id_auteur,:id_categorie)";
			$query = $bdd->prepare($sql);
			// Binding Post Values
			$query->bindParam(':titre',$titre,PDO::PARAM_STR);
			$query->bindParam(':resume',$resume,PDO::PARAM_STR);
			$query->bindParam(':contenu',$contenu,PDO::PARAM_STR);
			$query->bindParam(':id_auteur',$id,PDO::PARAM_INT);
			$query->bindParam(':id_categorie',$categorie,PDO::PARAM_STR);
			$query->execute();
			
			return $query;
		}

		public function delete_article($article)
		{
			require("connect_bd.php"); 	

			$sql="DELETE FROM articles WHERE id = '$article'";
			$query = $bdd->exec($sql);
			
			return $query;
		}


		public function update_article($id, $titre, $resume, $contenu)
		{
			require("connect_bd.php"); 	

			$sql="UPDATE articles SET titre = '$titre', resume = '$resume', contenu = '$contenu' WHERE id='$id'";
			$query = $bdd->exec($sql);
			
			return $query;
		}



		public function post_categorie($nom, $description)
		{
			require("connect_bd.php"); 

			$sql="INSERT INTO categories (nom, description) VALUES(:nom,:description)";
			$query = $bdd->prepare($sql);
			$query->bindParam(':nom',$nom,PDO::PARAM_STR);
			$query->bindParam(':description',$description,PDO::PARAM_STR);
			$query->execute();
			
			return $query;
		}



		public function delete_categorie($categorie)
		{
			require("connect_bd.php"); 	

			$sql="DELETE FROM categories WHERE id = '$categorie'";
			$query = $bdd->exec($sql);
			
			return $query;
		}

		public function update_categorie($id, $description, $nom)
		{
			require("connect_bd.php"); 	

			$sql="UPDATE categories SET nom = '$nom', description = '$description' WHERE id='$id'";
			$query = $bdd->exec($sql);
			
			return $query;
		}


		public function get_details_article($article)
		{
			require("connect_bd.php"); 
			
			$sql = "Select id, titre, date_pub, contenu from articles where id = $article";
			$query = $bdd->query($sql);
			$query->execute();
			$data = $query->fetchall(PDO::FETCH_OBJ);

			return $data;
		}

		public function get_articles_rubrique($rubrique)
		{
			require("connect_bd.php");

			//SELECT * FROM `articles` WHERE id_categorie = (SELECT id FROM categories WHERE nom="jeux");
			$sql = "Select id, titre, resume, date_pub from articles where id_categorie = (SELECT id FROM categories WHERE nom='$rubrique')";
			$query = $bdd->query($sql);
			$query->execute();
			$data = $query->fetchall(PDO::FETCH_OBJ);

			return $data;
		}
	}

?>