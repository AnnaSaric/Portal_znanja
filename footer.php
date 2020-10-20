<div class="footer-container">
	<div class="footer">
	<p align="center">
	FPMOZ @ Portal znanja
	</p>
	<?php
		require("config-prijava.php");
		
		if (isset($_COOKIE['uname'])){
			$prijavljen=true;
			$korisnik=$_COOKIE['uname'];
			$razina=$_COOKIE['razina'];
			echo "<br>";
			echo "Prijavljeni ste kao: <b><a>$korisnik</a></b>, a Vaša razina pristupa je: <b>$razina</b>";
		}
	?>
	</div>	
</div>

</body>
</html>