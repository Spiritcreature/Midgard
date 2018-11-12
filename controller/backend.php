<?php

// Chargement des classes
require_once('model/frontend/DrinkManager.php');


function editMap()
{
	$drinksmanager = new DrinkManager();
	$allDrinks = $drinksmanager->getDrinks();
	
	require('view/backend/editDrinks.php');
}

function removeDrink($id)
{
	$ids = implode(', ',$id);
	$drinksmanager = new DrinkManager();
	$delete = $drinksmanager->remove($ids);
	
	header('Location: index.php?action=editMap');
}

function resetDrink($id)
{
	$ids = implode(', ',$id);
	$drinksmanager = new DrinkManager();
	$delete = $drinksmanager->resetdr($ids);
	
	header('Location: index.php?action=editMap');
}

function delete($id)
{
	$ids = implode(', ',$id);
	$drinksmanager = new DrinkManager();
	$delete = $drinksmanager->delete($ids);
	
	header('Location: index.php?action=editMap');
}

function upload($image, $extensions, $size, $tmp, $error)

{
	$destination = 'public/img/' . $image;
	
	return move_uploaded_file($tmp, $destination);
}

function addDrink($name, $description, $image,$type)
{
	$drinksmanager = new DrinkManager();
	$adding = $drinksmanager->insertDrink($name, $description, $image, $type);
	
	require('view/backend/addDrink.php');
}

function addMessage($key,$value)
{
	$_SESSION['flash'][$key] = $value;
}