<?php

// Uključi vanjsku biblioteku
include("zaglavlje.php");

// Inicijaliziraj bazu
$baza = new Baza();

// Izvrši upit i vrati rezultat
$rezultat = $baza->exec('INSERT INTO Korisnik(Ime, Prezime, Email, Korisnicko_ime, Lozinka, Tip, Drzava_id_drzava) VALUES(?, ?, ?, ?, ?, ?, ?)',
 [$_POST['ime'], $_POST['prezime'], $_POST['email'], $_POST['korisnicko_ime'], $_POST['lozinka'], "1", $_POST['drzava']]);

// Ispiši poruku
if($rezultat > 0)
    echo "Uspješno ste registrirani!";
	?>

<p align="center"><a href="naslovna.php"><h3><b> POVRATAK NA NASLOVNICU </b></h3></a></p>	
<br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>

<footer class="container-fluid text-center">
  <?php include'footer.php';?>
</footer>