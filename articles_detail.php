<?php 
	try {
		$bdd=new PDO('mysql:host=localhost;dbname=blog;charset=utf8','root','');
	}
	catch(Exception $e)
			{
        die('Erreur : '.$e->getMessage());
		}
	if(empty($_GET['id'])) {
		header('Location: index.php');
	}	
	else {
		$re=$bdd->query('SELECT * FROM tbl_articles WHERE id='.$_GET['id'].'');
		$donnees=$re->fetch();
	}
	include "addcomment.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>BLOG</title>
	<style type="text/css">
		body
		{
		    width: 1200px;
		    margin: auto;
		    display: flex;
		    flex-direction: column;
		    border: 2px solid #045FB4;
			
		}
		#imgar {
			width: 35%;
			float: left;
			margin-left: 10px;
			border-radius: 5px;
			height: 300px;
			width: 600px;
		}
		article {
		margin-top: 10px;
		margin-bottom: 10px;

		} 
		article p {
			margin-left: 10px;
		}
		article  h1 {
			margin-left: 10px;

		}
	</style>
</head>
<body>

<div>
	<article>
		<?php
			if($donnees['id']) {
				if(!$donnees['image']){
					$img="./images/img-icon.png";
								}
				else {
					$img=$donnees['image'];
				}
				echo "<img id='imgar' src='admin/".$img."'>";
				echo "<div id='para'>";
				echo "<h1>".$donnees['title']."</h1>";
				echo "<p>".$donnees['description']."</p>";
				echo "</div>";

			}
			else {
				echo "L'article n'est pas trouvé";
				header('location: articles.php');
			}

		 ?>
	</article>
</div>
<div align="center">
<?php 
		$res=$bdd->query('SELECT * FROM comments where id_article="'.$_GET["id"].'"');
		
		while($comment=$res->fetch()) {
			echo"<table class='formlog'>";
			echo "<tr><td><strong>Nom:</strong></td>";
			echo "<td>".$comment['nom']."</td></tr>";
			echo "<tr><td><strong>Prenom:</strong></td>";
			echo "<td>".$comment['prenom']."</td></tr>";
			echo "<tr><td><strong>Email:</strong></td>";
			echo "<td>".$comment['email']."</td></tr>";
			echo "<tr><td><strong>Commentaire:</strong></td>";
			echo "<td>".$comment['commentaire']."</td></tr>";
			echo"</table>";

		}
		
 ?> 
</div>
<div>
<?php 
	include "comment.php"; 
 ?> 
</div>
</body>
</html>