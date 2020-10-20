<?php
//require("config.php");
include("zaglavlje.php");
include("config-prijava.php");
?>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
	  <li data-target="#myCarousel" data-slide-to="2"></li>
	  
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" width="500px" height="50px">
      <div class="item active">
        <img src="naslovne_slike/inf.jpg" width="500px" height="50px" alt="Image">
        <div class="carousel-caption">
          <h3><b>Informatika</b></h3>
        </div>      
      </div>

      <div class="item">
        <img src="naslovne_slike/matematikaa1.jpg" alt="Image">
        <div class="carousel-caption">
          <h3><b>Matematika</b></h3>
        </div>      
      </div>
	  
	  <div class="item">
        <img src="naslovne_slike/fizikaa.jpg" alt="Image">
        <div class="carousel-caption">
          <h3><b>Fizika</b></h3>
        </div>      
      </div>
	  
	  
	  
	  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
    <h2>Predmeti:</h2>

<div class="container text-center">    
  <br>
  <br>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <a href="https://hr.wikipedia.org/wiki/Informatika"><img src="naslovne_slike/informatika.jpg" class="img-responsive" width="350" height="400" alt="Image"></a>
	  <br>
      <p style="color: #555"><b>Informatika</b></p>
    </div>
    <div class="col-sm-4"> 
      <a href="https://hr.wikipedia.org/wiki/Matematika"><img src="naslovne_slike/math.jpg" class="img-responsive" width="350" height="400" alt="Image"></a>
	  <br>
      <p style="color: #555"><b>Matematika</b></p>    
    </div>
	<div class="col-sm-4"> 
      <a href="https://hr.wikipedia.org/wiki/Fizika"><img src="naslovne_slike/fizika1.jpg" class="img-responsive" width="350" height="300" alt="Image"></a>
	  <br>
      <p style="color: #555"><b>Fizika</b></p>    
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