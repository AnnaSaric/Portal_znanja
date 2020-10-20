<?php

require("config.php");

$baza = new Baza();

$komentar = $_POST['komentar'];

$rezultat = $baza->exec('INSERT INTO blog(komentari, korisnik_id_korisnik) VALUES (?, ?)', [$komentar, 1]);

header('Location: blog.php');
