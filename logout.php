<?php
	if (isset($_COOKIE['uname'])){
	setcookie('uname', "", time()-36000,'/');
	//echo "<div class=\"information-box round\">Odjavili ste se iz aplikacije!</div>";
	//echo "<p><a href=\"naslovnica1.php\">Kliknite ovdje za ponovnu prijavu...</a></p>";
	}
				
?>
 <?php 
	header("Location: naslovna.php");
	?>