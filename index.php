<?php
	function getCurrentDate()
	{
		return date("Y-m-d H:i:s");
	}
	session_start();
	require_once('connection.php');
	// if(!isset($_SESSION['role']))
	// {
	// 	header("Location: login.php");
	// 	exit;
	// }
	if (isset($_GET['controller'])) {
	  $controller = $_GET['controller'];
	  if (isset($_GET['action'])) {
	    $action = $_GET['action'];
	  } else {
	    $action = 'index';
	  }
	} else {
	  $controller = 'pages';
	  $action = 'home';
	}
	require_once('routes.php');