<?php

// Uključi vanjsku biblioteku
require('zaglavlje.php');
include("config-prijava.php");

// Inicijaliziraj bazu
$baza = new Baza();

// ID stavke
$id = $_GET['id'];

// Izvrši upit
$rezultat = $baza->query('SELECT * FROM literatura WHERE id_literatura = ?', [$id]);
$rezultat1= $baza->query('SELECT * FROM predmeti');

// Naša stavka je prvi rezultat iz baze
$artikal = $rezultat[0];

// Uključi zaglavlje


?>

<hr>
<div class="container">
    <div class="row">
        <div class="col-md-12">
			
            <h1 style="color: #555">Uredi literaturu</h1>

			
            <?php if(isset($_SESSION['obavijest_greska'])): ?>
                <!-- Obavijesti greške -->
                <div class="obavijest">
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php

                        // Ispiši obavijest
                        echo $_SESSION['obavijest_greska'];

                        // Isprazni spremnik za obavijesti
                        unset($_SESSION['obavijest_greska']);

                        ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($_SESSION['obavijest_uspjeh'])): ?>
                <!-- Obavijesti uspjeha -->
                <div class="obavijest">
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php

                        // Ispiši obavijest
                        echo $_SESSION['obavijest_uspjeh'];

                        // Isprazni spremnik za obavijesti
                        unset($_SESSION['obavijest_uspjeh']);

                        ?>
                    </div>
                </div>
            <?php endif; ?>
			
			<form class="form-horizontal" action="uredi_literaturu.php" method="POST" enctype="multipart/form-data" >
			<input type="hidden" name="id" value="<?php echo $artikal['id_literatura']; ?>">

                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label" style="color: #555">Naziv</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input" name="naziv" style="width:400px" value="<?php echo $artikal['naziv']; ?>">
                    </div>
                </div>
				
				
				
				
				<div class="form-group">
				<label  class="col-sm-2 control-label" style="color: #555">Treutna slika:</label>
				<?php if(!empty($artikal['slika'])): ?>
				<img src="Slike/<?php echo $artikal['slika']; ?>" width="450" height="280">
				<?php endif; ?>
				</div>
				
				<div class="form-group">
                    <label for="datoteka" class="col-sm-2 control-label" style="color: #555">Promjeni sliku</label>
                    <div class="col-sm-10">
                        <input type="file" id="datoteka" name="slika" value="<?php echo $artikal['slika']; ?>">
                    </div>
					</div>
                
				
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Uredi</button>
                    </div>
				</div>
                
				<br><br>

            </form>

            
        </div>
    </div>
</div>
<footer class="container-fluid text-center">
  <?php include'footer.php';?>
</footer>
