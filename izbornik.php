<?php
if (isset($_COOKIE['uname'])){
$prijavljen=true;
$razina=$_COOKIE['razina'];
}
else {
$prijavljen=false;
}
include("config.php");
include("config-prijava.php");
// Inicijaliziraj bazu
$baza = new Baza();

// Izvrši upit i vrati rezultat
$rezultat2= $baza->query('SELECT * FROM predmeti');
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="naslovna.php"><b>Naslovnica</b></a></li>
		
		<?php if (!$prijavljen) {
		?>
		<li><a href="portalznanja_index.php"><b>Registracija</b></a></li>
		<?php } ?>
		<?php if ($prijavljen) {
		?>
		<li class="dropdown" >
          <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="background-color: transparent"><b>Predmeti</b><span class="caret"></span></a>
          <ul class="dropdown-menu">
			<?php foreach($rezultat2 as $predmeti): ?>
                            <li value="<?php echo $predmeti['id_predmeta']; ?>"><a href="<?php echo $predmeti['naziv']; ?>.php"> <?php echo $predmeti['naziv']; ?></a></li>
                            <?php endforeach; ?>
          </ul>
        </li>
		<li><a href="blog.php"><b>Blog</b> </a></li>
		<?php if ($razina==2) {
		?>
		<li class="dropdown" >
          <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="background-color: transparent"><b>Administrator</b><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="literatura_add.php">Dodavanje literature</a></li>
            <li><a href="literatura_popis.php">Popis literature</a></li>
			<li><a href="zadaci_add.php">Dodavanje zadataka</a></li>
			<li><a href="zadaci_popis.php">Popis zadataka</a></li>
          </ul>
        </li>
		<?php } ?>
		<?php } ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><form class="form-inline" action="login.php" method="POST" id="login-form">
			<div class="form-group">
			<?php if (!$prijavljen) {
			?>
				
			<button type="submit" class="btn btn-default">Prijava</button>
			<?php } ?>
		</form>
		<form class="form-inline" action="logout.php" class="form-group" style="margin-bottom: 10px;">
		<?php if ($prijavljen) { 
			?>
			<label style="color: grey; margin-right: 20px"> 
				<?php
					require("config-prijava.php");
		
					if (isset($_COOKIE['uname'])){
					$prijavljen=true;
					$korisnik=$_COOKIE['uname'];
					$razina=$_COOKIE['razina'];
					echo "<br>";
					echo "Dobrodošli <b>$korisnik</b>.";
					}
				?>
			</label>
			<button type="submit" class="btn btn-default" >Odjava</button>
			<?php  } ?>
			</form>
		</div>
	 </li>
    </ul>
    </div>
  </div>
</nav>