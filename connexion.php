<?php
function connexion()
{
  $hostname = 'localhost';
  $username = 'root';
  $password = '';
  try {
    $dbh = new PDO("mysql:host=$hostname;dbname=voituree", $username, $password);
    return $dbh;
  } catch(PDOException $e) {
    echo $e->getMessage();
  }
}
?>
