<?php
	session_start();

	if (isset($_GET['rubrique'])) 
	{
		$a = "active";	
		$a_accueil = "";
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
		<li role="presentation" class="<?php echo $a_accueil; ?>"><a href="index.php">Accueil</a></li>
	<?php
		foreach($rub as $dataa): 
	?>

		<li role="presentation" class="<?php if($_GET['rubrique'] == $dataa->nom) { echo $a; } ?>"><a href="index.php?rubrique=<?php echo $dataa->nom ?>"><?php echo $dataa->nom ?></a></li>
	
	<?php
		endforeach;
	?>

	<?php 
		if (isset($_SESSION['username'])) 
		{

	?>	
		<a href="index.php?deconnexion=1" class="btn btn-danger" style="float: right;">
			<span class="glyphicon glyphicon-log-in"></span>&nbsp Deconnexion
		</a>
		
		<a href="index.php?gestion_articles=1" class="btn btn-primary" style="float: right; margin-right:12px">
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