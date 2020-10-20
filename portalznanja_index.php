<?php

// Uključi vanjsku biblioteku
include("zaglavlje.php");


// Inicijaliziraj bazu
$baza = new Baza();

// Izvrši upit i vrati rezultat
$rezultat = $baza->query('SELECT * FROM Korisnik');
$rezultat1 = $baza->query('SELECT * FROM Drzava');

?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
			<br>
            <h1 style="color: #555;" align="center"><b>Registracija</b></h1>
			<br>

            <form class="form-horizontal" action="portalznanja_registracija.php" method="POST">

                <div class="form-group">
                    <label for="ime" class="col-sm-2 control-label" style="color: #555">Ime</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input" name="ime" style="width:400px" required>
                    </div>
                </div>
				
				<div class="form-group">
                    <label for="prezime" class="col-sm-2 control-label" style="color: #555">Prezime</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input" name="prezime" style="width:400px" required>
                    </div>
                </div>
				<div class="form-group">
                    <label for="input" class="col-sm-2 control-label" style="color: #555">Država</label>
                    <div class="col-sm-10">

                        <select class="form-control" name="drzava" style="width:400px" >

                            <?php foreach($rezultat1 as $drzava): ?>
                            <option value="<?php echo $drzava['id_drzava']; ?>"><?php echo $drzava['naziv']; ?></option>
                            <?php endforeach; ?>

                        </select>

                    </div>
                </div>

                <div class="form-group">
                    <label for="korisnicko_ime" class="col-sm-2 control-label" style="color: #555">Korisničko ime</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input" name="korisnicko_ime" style="width:400px" required>
                    </div>
                </div>

                <div class="form-group">
					<label for="lozinka" class="col-sm-2 control-label" style="color: #555">Lozinka</label>
						<div class="col-sm-10">
							<input type="password" data-minlength="6" class="form-control" id="lozinka" name="lozinka" style="width:400px" required>
						</div>
				</div>
				
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label" style="color: #555">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="input" name="email" style="width:400px" data-error="Adresa je netočna." required>
                    </div>
                </div>
				
				<div class="form-group">
                    <div class="col-sm-10">
						<button type="submit" class="btn btn-primary" style="margin-left: 330px; background-color: #555">Registriraj se</button>
                    </div>
                </div>

            </form>
</div>
    </div>
</div>



<br>
<br>
<br>
<footer class="container-fluid text-center">
  <?php include'footer.php';?>
</footer>

</body>
</html>