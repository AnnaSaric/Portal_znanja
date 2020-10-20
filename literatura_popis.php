<?php

// Započni novu ili nastavi postojeću sesiju
//session_start();

// Uključi vanjsku biblioteku
include("zaglavlje.php");


// Inicijaliziraj bazu
$baza = new Baza();

$artikli = $baza->query('SELECT * FROM literatura');

?>

<body>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h1>Literatura</h1>

            <?php foreach($artikli as $artikal): ?>
			
				<?php if(!empty($artikal['slika'])): ?>
				<img src="Slike/<?php echo $artikal['slika']; ?>">
				<?php endif; ?>

                <h3><?php echo $artikal['naziv']; ?></h3>
                <p><strong>Literatura</strong> <?php echo $artikal['naziv']; ?></p>
				<?php if ($razina==2) {
		?>
				<button type="submit" class="btn btn-default"><a href="<?php echo "literatura_delete.php?id=".$artikal['id_literatura']."" ;?>"> Izbriši</a></button>
				<button type="submit" class="btn btn-default"><a href="<?php echo "literatura_edit.php?id=".$artikal['id_literatura']."" ;?>"> Uredi</a></button>

				<?php } ?>

                <hr>

            <?php endforeach; ?>

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
