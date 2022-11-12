<?php 

	include 'database.php';

	$id = $_POST['id'];
	$fistname = $_POST['fistname'];
	$lastname = $_POST['lastname'];
	$phone = $_POST['phone'];
	$adress = $_POST['adress'];

	$link->query("UPDATE person SET fistname = '".$fistname."',lastname = '".$lastname."',phone = '".$phone."',adress = '".$adress."' WHERE id = '".$id."'");


?>