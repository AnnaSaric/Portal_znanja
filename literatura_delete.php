<?php

// Zapo�ni novu ili nastavi postoje�u sesiju
session_start();

// Uklju�i vanjsku biblioteku
include ('config.php');

$con = new Baza();

$sifra_literatura = $_GET['id'];
$result = $con->exec('DELETE FROM literatura WHERE id_literatura=?', [$sifra_literatura]);

header("Location: naslovna.php");


					
