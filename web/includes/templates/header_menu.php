<?php
	session_start();

	if (isset($_GET['rubrique'])) 
	{
		if ($_GET['rubrique'] == "jeux")
		{
			$a_jeux = "active";
		}
		elseif ($_GET['rubrique'] == "smartphones") 
		{
			$a_smartphones = "active";
		}
	}
	else
	{
		$a_accueil = "active";
	}
?>

<div class="jumbotron">
    <h1 style="text-align:center; font-weight:bolder;">Bienvenue dans <span style="color:#7E53FF;">Samaye News </span>!</h1>
</div>


<ul class="nav nav-tabs">
    <li role="presentation" class="<?php echo $a_accueil ?>"><a href="index.php">Accueil</a></li>
    <li role="presentation" class="<?php echo $a_smartphones ?>"><a href="index.php?rubrique=smartphones">Actu Smartphones</a></li>
    <li role="presentation" class="<?php echo $a_jeux ?>"><a href="index.php?rubrique=jeux">Actu jeux-videos</a></li>

	<?php 
		if (isset($_SESSION['username'])) 
		{

	?>	
		<a href="index.php?deconnexion=1" class="btn btn-danger" style="float: right;">
			<span class="glyphicon glyphicon-log-in"></span>&nbsp Deconnexion
		</a>
		
		<a href="index.php?connexion=1" class="btn btn-primary" style="float: right; margin-right:12px">
			<span class="glyphicon glyphicon-log-out"></span>&nbsp Gérer
		</a>

	<?php
		} 
		else
		{

	?>
		<a href="index.php?connexion=1" class="btn btn-primary" style="float: right; background-color: #7E53FF">
			<span class="glyphicon glyphicon-log-in"></span>&nbsp Connexion
		</a>
	<?php

		} 

	?>
		
</ul>

<br>