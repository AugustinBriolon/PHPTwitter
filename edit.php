<?php session_start();
require('config/config.php');
require('model/functions.fn.php');

/*===============================
	Edit
===============================*/

//obtenir l'id du tweet correspondant lors du click (GET)
$check = $db->query('SELECT * FROM tweets WHERE id =' . $_GET['id'] . '');
$result = $check->fetch(PDO::FETCH_ASSOC);


// Si l'user valide l'edit
if($_POST){
	// Si l'user à le droit de modifier le tweet (= session)
	if ($result['user_id'] == $_SESSION['id']){
		updateTweet($db, $result['id'], $_POST['content']);
		header('Location: dashboard.php');
}
else{
	if ($_POST){
	alert("Vous ne pouvez pas modifier ce message.");
	}
}
}


include 'view/_header.php';
include 'view/edit.php';
include 'view/_footer.php';