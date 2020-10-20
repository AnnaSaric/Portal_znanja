<?php

// Započni novu ili nastavi postojeću sesiju
session_start();

// Uključi vanjsku biblioteku
include ('config.php');

$con = new Baza();

$sifra_zadaci = $_GET['id'];
$result = $con->exec('DELETE FROM zadaci WHERE id_zadaci=?', [$sifra_zadaci]);

header("Location: naslovna.php");


					
