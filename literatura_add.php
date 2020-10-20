<?php

// Zapoèni novu ili nastavi postojeæu sesiju
session_start();
include("zaglavlje.php");
include("config-prijava.php");
$rezultat1= $baza->query('SELECT * FROM predmeti');

?>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h1>Dodaj literaturu</h1>

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

            <form class="form-horizontal" action="dodaj_literaturu.php" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">Naziv</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input" name="naziv" style="width:400px">
                    </div>
                </div>
				
				<div class="form-group">
                    <label for="input" class="col-sm-2 control-label">Odaberi predmet</label>
                    <div class="col-sm-10">

                        <select class="form-control" name="predmeti" style="width:400px" >

                            <?php foreach($rezultat1 as $literatura): ?>
                            <option value="<?php echo $literatura['id_predmeta']; ?>" name="predmeti"><?php echo $literatura['naziv']; ?></option>
                            <?php endforeach; ?>

                        </select>

                    </div>
                </div>

			
                <div class="form-group">
                    <label for="datoteka" class="col-sm-2 control-label">Slika</label>
                    <div class="col-sm-10">
                        <input type="file" id="datoteka" name="slika">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Dodaj</button>
                    </div>
                </div>

            </form>

            <hr>

            

        </div>
    </div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>

<footer class="container-fluid text-center">
  <?php include'footer.php';?>
</footer>

</body>
</html>
