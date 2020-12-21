<?php
//fonction qui permet recuperer tout les articles à la base donne
function getArticlee(){
require('connect.php');
$dbb=connexion();
$req=$dbb->prepare('select id,title,date FROM article ORDER BY id');
$req->execute();
$data=$req->fetchAll(PDO::FETCH_OBJ);
return $data;
$req->closeCursor();
}
function getArticle($id){
	require('connect.php');
	$dbb=connexion();
	$req=$dbb->prepare('SELECT * from article where id=?');
	$req->execute(array($id));
	//si existe
	if($req->rowCount()== 1){
		$data=$req->fetch(PDO::FETCH_OBJ);
		return $data;
	}
	else
		header('Location : index.php');
	$req->closeCursor();
}
//fonction qui ajout des commentaire
function add_comment($articleId,$author,$comment){
	require('connect.php');
	$dbh=connexion();
	$req=$dbh->prepare('INSERT INTO comment (articleID,author,comment,date) values (?,?,?,NOW())');
	$req=$dbh->execute(array($articleId,$author,$comment));
	$req->closeCursor();
}
	
	//fonction qui récupére les commentaire d'un article 
	function get_comment($id){
		/*require('connect.php');
		$req='select * from comment where articleID =?';
		$sth=$dbh->exec(array($articleId,$author,$comment));
		$data=$sth->fetchALL(PDO::FETCH_OBJ);
		return $data;
		$sth->closeCursor();*/
	}
?>