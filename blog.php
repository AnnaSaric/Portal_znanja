<?php
//require("config.php");
include("zaglavlje.php");
include("config-prijava.php");

$baza = new Baza();

$blogovi = $baza->query('SELECT * FROM blog');

?>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Portal znanja Blog</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="blog.php">Naslovnica</a></li>
        <li><a href="informatika.php">Informatika</a></li>
        <li><a href="matematika.php">Matematika</a></li>
        <li><a href="fizika.php">Fizika</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>

    <div class="col-sm-9">

	<?php foreach($blogovi as $blog): ?>
	
	  <h2>Portal znanja</h2>
      <h5><span class="label label-danger">Portal</span> <span class="label label-primary">znanja</span></h5><br>
      <p><?php echo $blog['komentari']; ?></p>
	  <br><br>
	
	<?php endforeach; ?>
	
      <h4><small>RECENT POSTS</small></h4>
      <hr>


      <h4>Leave a Comment:</h4>
      <form role="form" action="dodaj_komentar.php" method="POST">
        <div class="form-group">
          <textarea class="form-control" rows="3" name="komentar" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
      <br><br>
      
      <p><span class="badge">0</span> Comments:</p><br>
      
      
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <?php include'footer.php';?>
</footer>
 
</body>
</html>
