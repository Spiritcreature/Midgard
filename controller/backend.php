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
	
	if (!isset($id))
	{
		addMessage('nok-bottle','Aucune boisson selectionnée(s)');
		header('Location: index.php?action=editMap');
	}
	else
	{
		$ids = implode(', ',$id);
		$drinksmanager = new DrinkManager();
		$delete = $drinksmanager->remove($ids);
		
		addMessage('ok-bottle','Boisson(s) retirée(s) de la carte.');
		header('Location: index.php?action=editMap');
	}
}

function resetDrink($id)
{
	if (!isset($id))
	{
		addMessage('nok-bottle','Aucune boisson selectionnée(s)');
		header('Location: index.php?action=editMap');
	}
	else
	{
		$ids = implode(', ',$id);
		$drinksmanager = new DrinkManager();
		$delete = $drinksmanager->resetdr($ids);

		addMessage('ok-bottle','Boisson(s) remise(s) sur la carte.');
		header('Location: index.php?action=editMap');
	}
}

function delete($id)
{
	$ids = implode(', ',$id);
	$drinksmanager = new DrinkManager();
	$delete = $drinksmanager->delete($ids);
	
	header('Location: index.php?action=editMap');
}


function addDrink($name, $description, $image, $type, $error, $tmp, $size)
{
	$extension = pathinfo($image, PATHINFO_EXTENSION);
	$maxSize = 2048576;
	$valide_extensions = array('jpeg', 'jpg', 'png');
	$control_extension = !in_array(strtolower($extension),$valide_extensions);
	
	

	if ( empty( $name ) ) {
		addMessage( 'wrong', 'Nom vide.' );
		header('Location: index.php?action=goToAdd ');
	}
	elseif ( empty( $description ) ) {
		addMessage( 'wrong', 'Description vide.' );
		header('Location: index.php?action=goToAdd ');
	}
	elseif ( $type === 'Catégorie...' ) {
		addMessage( 'wrong', 'Merci de selectionner le type de boisson.' );
		header('Location: index.php?action=goToAdd ');
	}
	elseif (empty($image) ){
		addMessage( 'wrong', 'Merci d\'ajouter une image.' );
		header('Location: index.php?action=goToAdd ');
	}
	elseif($control_extension){
		addMessage( 'wrong', 'Format du fichier non autorisé.' );
		header('Location: index.php?action=goToAdd ');
	}
	elseif($size > $maxSize){
		addMessage( 'wrong', 'Taille de l\'image autorisée dépassée.' );
		header('Location: index.php?action=goToAdd ');
	}
	else {
		
		$drinksmanager = new DrinkManager();
		$adding = $drinksmanager->insertDrink( $name, $description, $image, $type );
		$destination = 'public/img/' . $image;
		move_uploaded_file($tmp, $destination);
		
		addMessage( 'success', 'Boisson ajoutée à la carte.' );
		
		
		require( 'view/backend/addDrink.php' );
	}
}

function addEvent($name, $phone, $mail, $cat, $nbperson, $comment, $date)
{
	$dateNow = time();
	$dTime= DateTime::createFromFormat('d/m/Y', $date);
	$dateChoice = $dTime->getTimestamp();
	
	if ( empty( $date ) || $dateNow >= $dateChoice ) {
		addMessage( 'wrong', 'Date invalide ou non remplie' );
		header( 'Location: index.php?action=reservations' );
	} elseif ( empty( $name ) ) {
		addMessage( 'wrong', 'Merci de renseigner votre nom' );
		header( 'Location: index.php?action=reservations' );
	}
	elseif ( empty( $phone ) || !preg_match( "#^0[1-68]([-. ]?[0-9]{2}){4}$#", $phone ) ) {
		addMessage( 'wrong', 'Format de numéro invalide' );
		header( 'Location: index.php?action=reservations' );
	}
	elseif ( empty( $mail ) || !preg_match( "#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $mail ) ) {
		addMessage( 'wrong', 'Adresse mail non valide' );
		header( 'Location: index.php?action=reservations' );
	}
	elseif ( !isset( $cat ) ) {
		addMessage( 'wrong', 'Merci de renseigner le type de réservation.' );
		header( 'Location: index.php?action=reservations' );
	}
	elseif ( !isset( $nbperson ) || $nbperson >= 10 ) {
		addMessage( 'wrong', 'Vous n\'avez pas choisi le nombre de personnes' );
		header( 'Location: index.php?action=reservations' );
	}
	elseif ( empty( $comment ) && $cat == 'Autre' ) {
		addMessage( 'wrong', 'Vous avez sélectionné le choix autre, merci de préciser votre demande en commentaire.' );
		header( 'Location: index.php?action=reservations' );
	}
	else {
		$eventmanager = new EventManager();
		$addEvent = $eventmanager->newEvent( $name, $phone, $mail, $cat, $nbperson, $comment, $date );
		addMessage( 'success', 'Votre demande a bien été prise en compte.' );

		require( 'view/frontend/reservation.php' );
	}
	
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