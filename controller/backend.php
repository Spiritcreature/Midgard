<?php

// Chargement des classes
require_once('model/frontend/DrinkManager.php');
require_once('model/backend/EventManager.php');
require_once('model/backend/MessageManager.php');


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

function addEvent($name, $phone, $mail, $cat, $nbperson, $comment, $date)
{
	
	$eventmanager = new EventManager();
	$addEvent = $eventmanager->newEvent($name, $phone, $mail, $cat, $nbperson, $comment, $date);
	addMessage('success','Votre demande a bien été prise en compte.');
	
	require('view/frontend/reservation.php');
}

function adminReservation()
{
	$eventmanager = new EventManager();
	$events = $eventmanager->getEvents();
	
	require('view/backend/adminReservation.php');
}

function deleteEvent($id)
{
	$eventmanager = new EventManager();
	$del = $eventmanager->delevent($id);
	
	header('Location: index.php?action=adminReserView');
}

function newComment($comment)
{
	$messageManager = new MessageManager();
	$addComment = $messageManager->addComment($comment);
	
	header('Location: index.php?action=toDoList');
}

function getComment()
{
	$messageManager = new MessageManager();
	$listComments = $messageManager->getMessage();
	
	require('view/backend/toDo.php');
}

function delComment($id)
{
	$messageManager = new MessageManager();
	$listComments = $messageManager->deleteComment($id);
	
	header('Location: index.php?action=toDoList');
}

function addMessage($key,$value)
{
	$_SESSION['flash'][$key] = $value;
}