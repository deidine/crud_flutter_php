<?php 

	include 'database.php';

	$fistname = $_POST['fistname'];
	$lastname = $_POST['lastname'];
	$phone = $_POST['phone'];
	$adress = $_POST['adress'];

	$link->query("INSERT INTO person(fistname,lastname,phone,adress)VALUES('".$fistname."','".$lastname."','".$phone."','".$adress."')");













































	// include 'database.php';

	// $fistname = $_POST['fistname'];
	// $lastname = $_POST['lastname'];
	// $phone = $_POST['phone'];
	// $address = $_POST['address'];

	// $link->query("INSERT INTO person(fistname,lastname,phone,address)VALUES('".$fistname."','".$lastname."','".$phone."','".$address."')");

