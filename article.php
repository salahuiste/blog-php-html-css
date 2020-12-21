<?php
//verification
/*
if(!isset($_GET['id']) OR !is_numeric($_GET['id']))
{
	header('location:index.php');
}else
{
	//extract($_GET);
	//pour effectue un security et supprimer le code html et le code php de la variable
	$id=strip_tags($id);
	require_once('function.php');
	if(!empty($_POST)){
		extract($_POST);
		$errors=array();
		$author=strip_tags($author);
		$coment=strip_tags($coment);
			if(empty($author)) array_push($errors,'Entrez un titre');
			if(empty($coment)) array_push($errors,'Entrez un commentaire');
				
		if(count($errors)==0)
		{
			$comment=add_comment($id,$author,$comment);
			$success='votre commentaire a été publie';
			unset($author);
			unset($comment);
		}
	}*/
	require('function.php');
	$article=getArticle($id);
	$comment=add_comment($id,$author,$comment);

?>

<html>
<head>
<meta charset="utf-8"/>
</head>
<body>


<form action="article.php?id=<?$article->id ?>"  method="POST">
<p><label for="author">Titre d'article </label><input type="text" name="author" id="author" value="if(isset($author)) echo $author;"/></p>
<p><label for="comment">Commentaire </label><textarea name="comment" id="comment" cols="30" rows="30" value="if(isset($comment)) echo $comment;"></textarea></p>
<input type="submit" value="Envoye">
</form>
<h2> Commentaire:</h2>
<?php foreach($comment as $com) 
echo"<h3> $com->author</h3>"; 
echo"<p>  $com->comment </p>";  
echo "<time> $com->date </time> "; 
?>

</body>

</html>