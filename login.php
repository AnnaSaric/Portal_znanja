<?php
include("zaglavlje.php");
?>

<div id="content-container">
	<div id="content-container2">
		<div id="content-container3">
			<div id="content">
				<h2 align="center">PRIJAVA</h2>
				<div id="login">
					<?php 
					if (!isset($_COOKIE['uname'])){
					?>
					<form align="center" action="prijava.php" method="POST" id="login-form">
					
						<fieldset>

							<p>
								<label for="login-username">Korisničko ime:</label>
								<input type="text" name="username" id="login-username" autofocus />
							</p>

							<p>
								<label for="login-password">Lozinka:</label>
								<input type="password" name="password" id="login-password"  />
							</p>
								<input type="submit" class="button" value="PRIJAVA" />
							
							
							
						</fieldset>
						<br/>
						

					</form>
					<?php
					}
					else {
					echo "Već ste prijavljeni, nama potrebe za prijavom, nastavite s radom...";
					}
					?>
				
				</div> <!-- end login -->
			</div>
			
		</div>
	</div>
</div>
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
</body>
</html>
