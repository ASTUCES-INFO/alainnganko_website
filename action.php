<?php
session_start() ; // Démarrage d'une session
$site_alain = new PDO("pgsql:host=localhost;dbname=site_alain" , "postgres" , "XENON") ;

  if(isset($_POST['Envoyer'])){ // Lorsqu'on clique sur le bouton 'Envoyer'...
  {
    // ...On verifie ensuite qu'aucun champ n'est vide avant d'envoyer le formulaire
  		if(!empty($_POST['nom_prenom']) AND !empty($_POST['email']) AND !empty($_POST['telephone']) AND !empty($_POST['details']))
  		{
           // Utilisation du "htmlspecialchars" pour éviter que l'utilisateur puisse inserrer du code malveillant dans le formulaire
           $name=htmlspecialchars($_POST['nom_prenom']);
           $email=htmlspecialchars($_POST['email']);
           $telephone=htmlspecialchars($_POST['telephone']);
           $message=htmlspecialchars($_POST['details']);

            $insertDemande = $site_alain->prepare('INSERT INTO demande(nom_prenom, email, telephone, details) VALUES (?,?,?,?)') ;
            $insertDemande->execute(array($name,$email, $telephone, $message )) ;

            // Si lors du click sur le bouton d'envoi, tous les champs sont bien remplis, alors le client reçoit le message de con firmation ci-dessous :
             echo "<h2>Merci cher(e) $name  de nous avoir soumi votre requête. <br/> Vous aurez un retour dans les plus brefs délais. </br> Cordialement.</h2>";
  		}
           else{ // Dans le cas contraire, il reçoit plutôt le message d'erreur ci-dessous :
              echo "<h2>Veuillez remplir tous les champs pour que votre requête soit transmise.Merci</h2>" ;
          }
  	}
  }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Réponse</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="pageAdmin.css">
	<link rel="stylesheet" href="bouton_retour.css">
</head>
 <a href = "index.html" >
    <button>Retour </button> </a>
<body>

	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="jquery.vide.js"></script>
</body>
</hstml>
