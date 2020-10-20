<?php

// Zapoèni novu ili nastavi postojeæu sesiju
session_start();

// Ukljuèi vanjsku biblioteku
include ('config.php');

$con = new Baza();

$sifra_literatura = $_GET['id'];
$result = $con->exec('DELETE FROM literatura WHERE id_literatura=?', [$sifra_literatura]);

header("Location: naslovna.php");


					
