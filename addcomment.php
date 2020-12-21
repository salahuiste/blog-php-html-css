<?php 

	if($_SERVER["REQUEST_METHOD"]=="POST") {
		try {
			$bdd=new PDO("mysql:host=localhost;dbname=blog;charset=utf8","root","");
		}
		catch(Exception $e)
			{
        die('Erreur : '.$e->getMessage());
		}

		$requete=$bdd->prepare('INSERT INTO comments(id_article,nom,prenom,email,commentaire) VALUES(:idart,:nom,:prenom,:email,:com)');
		$requete->execute(array(
				"idart" => $_GET["id"],
				"nom" => $_POST["lastname"],
				"prenom" => $_POST["firstname"],
				"email"=> $_POST["email"],
				"com"=>$_POST["comment"]
			));

	}
?>