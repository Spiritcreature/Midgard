<?php
session_start();
require('controller/frontendController.php');
require('controller/backendController.php');

if (isset($_GET['action']) && !empty($_GET['action']))
	{
		switch ($_GET['action'])
		{
			case ($_GET['action'] == 'listPosts'):
				listPosts();
				break;
			default:
				header('HTTP/1.0 404 Not Found');
				include('view/frontend/error-404.php');
				exit();
		}
	}
	else
	{
		require ('index.php');
	}

