<?php
	class ExampleDao
	{
		public function get_articles()
		{
			require("connect_bd.php"); 
			
			$sql = "Select id, titre, date_pub from articles";
			$query = $bdd->query($sql);
			$query->execute();
			$data = $query->fetchall(PDO::FETCH_OBJ);

			return $data;
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

			$sql = "Select id, titre, date_pub from articles where rubrique = '$rubrique'";
			$query = $bdd->query($sql);
			$query->execute();
			$data = $query->fetchall(PDO::FETCH_OBJ);

			return $data;
		}
	}

?>