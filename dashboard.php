<?php session_start();
require('config/config.php');
require('model/functions.fn.php');

/*===============================
	Dashboard
===============================*/

$usernameID = htmlentities(trim($_GET['username']));
$created_atID = htmlentities(trim($_GET['created_at']));

if (isset($_SESSION['id'])){
	header('Location: dashboard.php');
	exit;
}









/********************************
			VIEW
********************************/
//On include toujours la view en dernier
include 'view/_header.php';
include 'view/dashboard.php';
include 'view/_footer.php';