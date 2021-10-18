<?php session_start();
require('config/config.php');
require('model/functions.fn.php');

/*===============================
	Dashboard
===============================*/










/********************************
			VIEW
********************************/
//On include toujours la view en dernier
include 'view/_header.php';
include 'view/dashboard.php';
include 'view/_footer.php';