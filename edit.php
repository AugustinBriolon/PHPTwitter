<?php session_start();
require('config/config.php');
require('model/functions.fn.php');

/*===============================
	Edit
===============================*/
$content = htmlentities(trim($_GET['message']));
$usernameID = htmlentities(trim($_GET['username']));
$errorsMessage = "L'article n'a pas pu être enregistré, merci de corriger vos erreurs.";


$success = false;
$errors = [];
$post = new Post();

if (!empty($_POST)){ 
	$postTable = new PostTable($db);
	Valisator::lang('fr');
	$v = new PostValidator($_POST, $postTable, $post->getID());
	ObjectHelper::hydrate($post, $_POST,['suer_id', 'message',  'created_at']);
	if ($v->validate()){ 
		$postTable->update($post);
		$success = true;
	} else {
		$errors = $v->$errors();
	}
}

$forms = new Form($post, $errors);




/********************************
			VIEW
********************************/
//On include toujours la view en dernier
include 'view/_header.php';
include 'view/edit.php';
include 'view/_footer.php';