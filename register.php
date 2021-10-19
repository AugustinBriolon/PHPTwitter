<?php session_start();
require('config/config.php');
require('model/functions.fn.php');

/*===============================
	Register
===============================*/
// S'il y a une session alors on ne retourne plus sur cette page
if (isset($_SESSION['id'])){
	header('Location: dashboard.php');
	exit;
}
else{
	// Si la variable "$_Post" contient des informations alors on les traitres
	if(!empty($_POST)){
		extract($_POST);
		$valid = true;

		// On se place sur le bon formulaire grâce au "name" de la balise "input"
		if (isset($_POST['inscription'])){
			// $username = htmlentities(trim($username)); // on récupère le surnom
			$username = $_POST['username'];

			// $email = htmlentities(strtolower(trim($email))); // On récupère l'email
			$email = $_POST['email'];
			$mdp = trim($mdp); // On récupère le mot de passe 

			//  Vérification du surnom
			if(empty($username)){
				$valid = false;
				$er_username = ("Le surnom d' utilisateur ne peut pas être vide");
			// On vérifit que le surnom est disponible
			}else{
				$req_username = $db->prepare("SELECT * FROM users WHERE username=?");
				$req_username->execute([$username]); 
				$usernameResultat = $req_username->fetch();

				if ($usernameResultat){
					$er_username = "Ce surnom existe déjà";
				}
				}

			// Vérification de l'email
			if(empty($email)){
				$valid = false;
				$er_email = "Le mail ne peut pas être vide";
			}else{
				// On vérifit que l'email est disponible
				$req_email = $db->prepare("SELECT * FROM users WHERE email=?");
				$req_email->execute([$email]); 
				$emailResultat = $req_email->fetch();

				if ($emailResultat){
					$er_email = "Cet email existe déjà";
				}
			}

			// Vérification du mot de passe
			if(empty($mdp)) {
				$valid = false;
				$er_mdp = "Le mot de passe ne peut pas être vide";
			}

			// Si toutes les conditions sont remplies alors on fait le traitement
			if($valid){

				$mdp = crypt($mdp, '$6$rounds=5000$shshsbfxsdthshshsh');

				// A modifier
				$picture = 'view/profil_pic/undefined.jpg';

				// var_dump($username, $email, $mdp);
				// On insert les données dans le tableau
				$requete = $db->prepare("INSERT INTO users(username, email, password, picture) VALUES
					(?, ?, ?, ?)");
					$requete->bindParam(1, $username);
					$requete->bindParam(2, $email);
					$requete->bindParam(3, $mdp);
					$requete->bindParam(4, $picture);
					$requete->execute();
				
				header('Location: dashboard.php');
				exit;
			}	
	}
}

/********************************
			VIEW
********************************/
//On include toujours la view en dernier
include 'view/_header.php';
include 'view/register.php';
include 'view/_footer.php';
}
?>