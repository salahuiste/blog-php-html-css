<?php
function connexion()
{
  $hostname = 'localhost';
  $username = 'root';
  $password = '';
  try {
    $dbb = new PDO("mysql:host=$hostname;dbname=monblog", $username, $password);
    return $dbb;
  } catch(PDOException $e) {
    echo $e->getMessage();
  }
}
?>
