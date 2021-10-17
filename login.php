<?php session_start();

/********************************
	DATABASE & FUNCTIONS
********************************/
require('config/config.php');
require('model/functions.fn.php');


/********************************
			PROCESS
********************************/

//si l'utilisateur valide le formulaire
if(!empty($_POST)){
	//la fonction userConnection renvoie true ou false
		//true ->  connexion = OK
		//false -> connexion = FAIL
	$connect = userConnection($db,$_POST['email'],$_POST['password']);

	//si connexion OK on redirige sur le dashboard
	if($connect == true){
		header('Location: dashboard.php');
	}
	else{
		$error = 'Le couple email / mot de passe est incorrect';
	}
	
}

/********************************
			VIEW
********************************/
//On include toujours la view en dernier
include 'view/_header.php';
include 'view/login.php';
include 'view/_footer.php';
