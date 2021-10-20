<?php session_start();

/********************************
	DATABASE & FUNCTIONS
********************************/
require('config/config.php');
require('model/functions.fn.php');


/********************************
			PROCESS
********************************/
if(!empty($_POST['email']) && !empty($_POST['password'])){
	// Patch XSS
	$email = htmlspecialchars($_POST['email']); 
	$mdp = htmlspecialchars($_POST['password']);

	// On regarde si l'utilisateur est inscrit dans la table utilisateurs
	$data = userConnection($db, $email, $mdp);

	if(count($data) > 0){
		
        // Si le mail est bon niveau format
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            // Si le mot de passe est le bon
            if(password_verify($mdp, $data['password']))
            {
                // On créer la session et on redirige 
                $_SESSION['user'] = $data['username'];
                header('Location: dashboard.php');
                die();
			}
		}else{
			$errorEmail = "L'adresse mail n'existe pas";
		}
	}else{
		$errorMdp = "Le mot de passe est incorrect";
	}
}

/********************************
			VIEW
********************************/
//On include toujours la view en dernier
include 'view/_header.php';
include 'view/login.php';
include 'view/_footer.php';

?>