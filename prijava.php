<?php
//require("config.php");
include("zaglavlje.php");
include("config-prijava.php");

function CheckLogin($username,$password){
	global $dbhost, $dbuser , $dbpass, $dbname;
	// povezivanje
	$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
	mysql_select_db($dbname,$conn);
	$db_selected = mysql_select_db($dbname, $conn);
	if (!$db_selected) {
		die ('Ne mogu se spojiti na bazu: ' . mysql_error());
	}
	$sql="SELECT * FROM Korisnik where Korisnicko_ime='$username' AND Lozinka='$password'";
	$result=mysql_query($sql) or die("<br>".$sql."<br/><br/>".mysql_error());
	$num_rows=0;
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		//printf("uSERNAME: %s  lOZINKA: %s", $row["KORISNICKO_IME"], $row["LOZINKA"]);
		$num_rows++;
	}
	mysql_free_result($result);

	if ($num_rows >= 1) {
		return true;
	}
	else {
		return false;
	}

}
function ReturnUserData($username,$password){
	global $dbhost, $dbuser , $dbpass, $dbname;
					// povezivanje
	$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
	mysql_select_db($dbname);
	$sql="SELECT Korisnicko_ime, Tip FROM Korisnik where Korisnicko_ime='$username' AND Lozinka='$password'";
	$result=mysql_query($sql) or die("<br>".$sql."<br/><br/>".mysql_error());
	$rez=array();
	while($ispisrez = mysql_fetch_array($result)){
	//print_r($ispisrez);
	$rez=$ispisrez;
	}
	return $rez;
	//print_r($ispisirez);

}

?>
				
			<?php
				
			if (isset($_POST["username"])||isset($_POST["password"])){
				$username=$_POST["username"];
				$password=$_POST["password"];
				$postoji=CheckLogin($username,$password);
				
			if ($postoji){
				//echo "<b>USPJEŠNA PRIJAVA!</b><br>";
				$rez=array();
				$uname="";
				$razina=0;
				ReturnUserData($username,$password);
				$rez=ReturnUserData($username,$password);
				//print_r($rez); //ovo je samo za provjeru da vidite kao izgleda polje
				list($uname,$razina)=$rez;
						
				setcookie('uname', $uname, time()+1800,'/');
				setcookie('razina', $razina, time()+1800,'/');
				echo "Uspješno ste prijavljeni.  <br>";
				//print_r($_COOKIE); //ovo je samo za provjeru da vidite kao izgleda polje
				header("Location: naslovna.php");
				
				}
			else {
				function alert($msg) {
					echo "<script type='text/javascript'>alert('$msg');</script>";
				}
				
				alert("Ne postoji korisnik s navedenim podacima.");
				header("Location: naslovna.php");

				
				}
				}
			else {
				echo "<h4><b><a href=\"login.php\">Kliknite ovdje za prijavu u aplikaciju...</a></b></h4>";
				}

			?>
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
</br>
</br>
</br>
<footer class="container-fluid text-center">
  <?php include'footer.php';?>
</footer>