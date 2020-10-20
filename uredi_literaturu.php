<?php
session_start();
// Uključi vanjsku biblioteku
include 'config.php';

// Inicijaliziraj bazu
$baza = new Baza();
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
// Podaci iz forme
$id=$_POST['id'];
$naziv = $_POST['naziv'];



    // Upload datoteka
    $tip_datoteke = pathinfo($_FILES['slika']['name'], PATHINFO_EXTENSION);

    $direktorij_za_upload = 'Slike/';
    $novi_naziv_datoteke = uniqid() . '.' . $tip_datoteke;

    $uploadOk = true;

    // Provjeri da li datoteka već postoji
    if(file_exists($direktorij_za_upload . $novi_naziv_datoteke))
    {
        $uploadOk = false;
        $_SESSION['obavijest_greska'] = 'Datoteka već postoji!';
    }

    // Provjeri veličinu datoteke
    else if($_FILES['slika']['size'] > 200000)
    {
        $uploadOk = false;
        $_SESSION['obavijest_greska'] = 'Datoteka je prevelika!';
    }

    // Dozvoli samo određene formate datoteke
    else if($tip_datoteke != 'jpg' && $tip_datoteke != 'jpeg'  && $tip_datoteke != 'png')
    {
        $uploadOk = false;
        $_SESSION['obavijest_greska'] = 'Dozvoljene su samo JPG i PNG datoteke!';
    }

    // Provjeri stanje uploada
    if($uploadOk == true)
    {
        // Sve je uredu, uploadaj datoteku

        if(move_uploaded_file($_FILES['slika']['tmp_name'], $direktorij_za_upload . $novi_naziv_datoteke))
        {
            // Unesi unos u bazu
            $baza->exec('UPDATE literatura SET naziv = ?,  Slika =? WHERE id_literatura = ?',
			[$naziv, $novi_naziv_datoteke, $id]);
 
            // Pohrani poruku o uspješnoj izmjeni
            $_SESSION['obavijest_uspjeh'] = 'Datoteka uspješno uploadana.';

            // Preusmjeri na početnu stranicu
            header('Location: naslovna.php');
            exit();
        }
        else
        {
            $_SESSION['obavijest_greska'] = 'Dogodila se greška prilikom uploada.';
        }
    }
	}

