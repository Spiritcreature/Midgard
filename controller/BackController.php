<?php

namespace Controller;

use Model\Frontend\DrinkManager;
use Model\Backend\EventManager;
use Model\Backend\MessageManager;
use Model\Autoloader;
use \DateTime;

// Chargement des classes
require_once('Model/Autoload.php');
Autoloader::register();


class BackController {
	
	public function editMap()
	{
		$drinksmanager = new DrinkManager();
		$allDrinks = $drinksmanager->getDrinks();

		require('View/Backend/editDrinks.php');
	}

	public function removeDrink($id)
	{

		if (!isset($id))
		{
			
			$backController = new BackController();
			$result = $backController->addMessage('nok-bottle','Aucune boisson selectionnée(s)');
			header('Location: index.php?action=editMap');
		}
		else
		{
			$ids = implode(', ',$id);
			$drinksmanager = new DrinkManager();
			$delete = $drinksmanager->remove($ids);

			$backController = new BackController();
			$result = $backController->addMessage('ok-bottle','Boisson(s) retirée(s) de la carte.');
			header('Location: index.php?action=editMap');
		}
	}

	public function resetDrink($id)
	{
		if (!isset($id))
		{
			$backController = new BackController();
			$result = $backController->addMessage('nok-bottle','Aucune boisson selectionnée(s)');
			header('Location: index.php?action=editMap');
		}
		else
		{
			$ids = implode(', ',$id);
			$drinksmanager = new DrinkManager();
			$delete = $drinksmanager->resetdr($ids);

			$backController = new BackController();
			$result = $backController->addMessage('ok-bottle','Boisson(s) remise(s) sur la carte.');
			header('Location: index.php?action=editMap');
		}
	}
/*
	public function delete($id)
	{
		$ids = implode(', ',$id);
		$drinksmanager = new DrinkManager();
		$delete = $drinksmanager->delete($ids);

		header('Location: index.php?action=editMap');
	}
*/

	public function addDrink($name, $description, $image, $type, $error, $tmp, $size)
	{
		$extension = pathinfo($image, PATHINFO_EXTENSION);
		$maxSize = 2048576;
		$valide_extensions = array('jpeg', 'jpg', 'png');
		$control_extension = !in_array(strtolower($extension),$valide_extensions);



		if ( empty( $name ) ) {
			$backController = new BackController();
			$result = $backController->addMessage( 'wrong', 'Nom vide.' );
			header('Location: index.php?action=goToAdd ');
		}
		elseif ( empty( $description ) ) {
			$backController = new BackController();
			$result = $backController->addMessage( 'wrong', 'Description vide.' );
			header('Location: index.php?action=goToAdd ');
		}
		elseif ( $type === 'Catégorie...' ) {
			$backController = new BackController();
			$result = $backController->addMessage( 'wrong', 'Merci de selectionner le type de boisson.' );
			header('Location: index.php?action=goToAdd ');
		}
		elseif (empty($image) ){
			$backController = new BackController();
			$result = $backController->addMessage( 'wrong', 'Merci d\'ajouter une image.' );
			header('Location: index.php?action=goToAdd ');
		}
		elseif($control_extension){
			$backController = new BackController();
			$result = $backController->addMessage( 'wrong', 'Format du fichier non autorisé.' );
			header('Location: index.php?action=goToAdd ');
		}
		elseif($size > $maxSize){
			$backController = new BackController();
			$result = $backController->addMessage( 'wrong', 'Taille de l\'image autorisée dépassée.' );
			header('Location: index.php?action=goToAdd ');
		}
		else {

			$drinksmanager = new DrinkManager();
			$adding = $drinksmanager->insertDrink( $name, $description, $image, $type );
			$destination = 'Public/img/' . $image;
			move_uploaded_file($tmp, $destination);

			$backController = new BackController();
			$result = $backController->addMessage( 'success', 'Boisson ajoutée à la carte.' );


			require( 'View/Backend/addDrink.php' );
		}
	}

	public function addEvent($name, $phone, $mail, $cat, $nbperson, $comment, $date)
	{
		$dateNow = time();
		$dTime= DateTime::createFromFormat('d/m/Y', $date);
		$dateChoice = $dTime->getTimestamp();

		if ( empty( $date ) || $dateNow >= $dateChoice ) {
			$backController = new BackController();
			$result = $backController->addMessage( 'wrong-event', 'Date invalide ou non remplie' );
			header( 'Location: index.php?action=reservations' );
		} elseif ( empty( $name ) ) {
			$backController = new BackController();
			$result = $backController->addMessage( 'wrong-event', 'Merci de renseigner votre nom' );
			header( 'Location: index.php?action=reservations' );
		}
		elseif ( empty( $phone ) || !preg_match( "#^0[1-68]([-. ]?[0-9]{2}){4}$#", $phone ) ) {
			$backController = new BackController();
			$result = $backController->addMessage( 'wrong-event', 'Format de numéro invalide' );
			header( 'Location: index.php?action=reservations' );
		}
		elseif ( empty( $mail ) || !preg_match( "#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $mail ) ) {
			$backController = new BackController();
			$result = $backController->addMessage( 'wrong-event', 'Adresse mail non valide' );
			header( 'Location: index.php?action=reservations' );
		}
		elseif ( !isset( $cat ) ) {
			$backController = new BackController();
			$result = $backController->addMessage( 'wrong-event', 'Merci de renseigner le type de réservation.' );
			header( 'Location: index.php?action=reservations' );
		}
		elseif ( !isset( $nbperson ) || $nbperson > 10 ) {
			$backController = new BackController();
			$result = $backController->addMessage( 'wrong-event', 'Vous n\'avez pas choisi le nombre de personnes' );
			header( 'Location: index.php?action=reservations' );
		}
		elseif ( empty( $comment ) && $cat == 'Autre' ) {
			$backController = new BackController();
			$result = $backController->addMessage( 'wrong-event', 'Vous avez sélectionné le choix autre, merci de préciser votre demande en commentaire.' );
			header( 'Location: index.php?action=reservations' );
		}
		else {
			$eventmanager = new EventManager();
			$addEvent = $eventmanager->newEvent( $name, $phone, $mail, $cat, $nbperson, $comment, $date );
			$backController = new BackController();
			$result = $backController->addMessage( 'success-event', 'Votre demande a bien été prise en compte.' );

			require( 'View/Frontend/reservation.php' );
		}

	}

	public function adminReservation()
	{
		$eventmanager = new EventManager();
		$events = $eventmanager->getEvents();

		require('View/Backend/adminReservation.php');
	}

	public function deleteEvent($id)
	{
		$eventmanager = new EventManager();
		$del = $eventmanager->delevent($id);
		$backController = new BackController();
		$result = $backController->addMessage( 'success-event', 'La réservation a été supprimé.' );

		header('Location: index.php?action=adminReserView');
	}

	public function newComment($comment)
	{
		$messageManager = new MessageManager();
		$addComment = $messageManager->addComment($comment);

		header('Location: index.php?action=toDoList');
	}

	function getComment()
	{
		$messageManager = new MessageManager();
		$listComments = $messageManager->getMessage();

		require('View/Backend/toDo.php');
	}

	public function delComment($id)
	{
		$messageManager = new MessageManager();
		$listComments = $messageManager->deleteComment($id);

		header('Location: index.php?action=toDoList');
	}

	function getModifyEvent($id){
		$eventmanager = new EventManager();
		$mEvent = $eventmanager->selectModifEvent($id);

		require('View/Backend/modifyEvent.php');
	}


	public function modifEvent($id, $date, $phone, $nbPerson, $comment)
	{
		$dateNow = time();
		$dTime= DateTime::createFromFormat('d/m/Y', $date);
		$dateChoice = $dTime->getTimestamp();

		if ( empty( $date ) ) {
			$backController = new BackController();
			$result = $backController->addMessage( 'wrong', 'Date invalide ou non remplie' );
			header( 'Location: index.php?action=selectEvent&id=' . $_GET['id']);
		}
		elseif ( empty( $phone ) || !preg_match( "#^0[1-68]([-. ]?[0-9]{2}){4}$#", $phone ) ) {
			$backController = new BackController();
			$result = $backController->addMessage( 'wrong', 'Format de numéro invalide' );
			header( 'Location: index.php?action=selectEvent&id=' . $_GET['id'] );
		}
		elseif ( empty ($nbPerson ) ) {
			$backController = new BackController();
			$result = $backController->addMessage( 'wrong', 'Vous n\'avez pas choisi le nombre de personnes' );
			header( 'Location: index.php?action=selectEvent&id=' . $_GET['id'] );
		}
		else {
			$eventmanager = new EventManager();
			$idEvent = $eventmanager->modifyEvent($id, $date, $phone, $nbPerson, $comment);
			$backController = new BackController();
			$result = $backController->addMessage( 'success', 'Votre modification a bien été prise en compte.' );

			header('Location: index.php?action=adminReserView');
		}
	}

	function addMessage($key,$value)
	{
		$_SESSION['flash'][$key] = $value;
	}
	
}