<?php

try{
  $myPDO = new PDO("pgsql:host=localhost;dbname=site_alain" , "postgres" , "XENON") ; // Paramètres de connexion à la base de données PostgreSQL
  echo"Connexion à la base de données réussie !" ;  // Si tous les paramètres de connexion ci-dessus sont exactes
} 
catch(PDOException $e){   
  echo $e->getMessage() ; // Si la connexion n'a pas lieu, le serveur renverra la cause exacte qui nous empêche de nous connecter à la BD
}

?>