<?php session_start();
require('config/config.php');
require('model/functions.fn.php');

/*===============================
	Dashboard
===============================*/
if (isset($_SESSION['id'])){
	header('Location: dashboard.php');
	exit;
}

//Ajouter un commentaire
if(!empty($_POST['tweets'])){
    insertTweet($db, $_SESSION['id'], $_SESSION['username'], $_POST['tweets']);
    $_POST['tweets'] == "";
}

// Supprimer un commentaire
if($_GET){
    $sql = $db->query('SELECT * FROM tweets WHERE id =' . $_GET["id"] . '');
    $result = $sql->fetch(PDO::FETCH_ASSOC);
    if($result){
        if ($result['user_id'] == $_SESSION['id']){
            deleteTweet($db, $result['id']);
        }else{
            // Si l'utilisateur force l'acces avec l'url
            alert ('Vous ne pouvez pas supprimer ce tweet');
        }
    }
}









/********************************
			VIEW
********************************/
//On include toujours la view en dernier
include 'view/_header.php';
include 'view/dashboard.php';
include 'view/_footer.php';