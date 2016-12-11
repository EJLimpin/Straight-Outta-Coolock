<!DOCTYPE html>

<html>

<head>
    
    <title>Budget Build</title>
    
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="style.css"/>
    
</head>

<body>
  
  
    <div class="container">
      <!-- Example row of columns -->
      
     	<div class="container">
      <div class="row">
      	<center>
	  	<div class="col-xs-12">
          <h1><img id="banner" src="resources/banner.png" alt="Banner"/></h1>
        </div>
        </center>
      </div> 
      </div>
    
        <nav class="navbar navbar-default ">
      <div class="container-fluid">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </nav>
  


<center>
<div class="w3-content w3-display-container">
  <img class="mySlides" src="budget1/img1.jpg" style=" height:500px; width:30%">
  <img class="mySlides" src="budget1/img2.jpg" style="height:500px; width:30%">
  <img class="mySlides" src="budget1/img3.jpg" style="height:500px; width:30%">
  <img class="mySlides" src="budget1/img4.jpg" style="height:500px; width:30%">
</div>

<div class="w3-center">
  <button class="w3-btn" onclick="plusDivs(-1)">&#10094; Prev</button>
  <button class="w3-btn" onclick="plusDivs(1)">Next &#10095;</button>

  <button class="w3-btn demo" onclick="currentDiv(1)">1</button> 
  <button class="w3-btn demo" onclick="currentDiv(2)">2</button> 
  <button class="w3-btn demo" onclick="currentDiv(3)">3</button> 
</div>
</center>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>




<div id="container">
    <div id="row">
        
        <h3>£500 Budget Build</h3>
        
        
        <h3>Specs:</h3>
        <ul>
            <li>Intel Core i3-4170 3.7GHz Dual-Core</li>
            <li>ASRock H97M PRO4 Micro ATX LGA1150</li>
            <li>G.Skill Sniper Series 8GB (2 x 4GB) DDR3-2133</li>
            <li>PNY CS1311 120GB 2.5" SSD</li>
            <li>Western Digital Blue 500GB 3.5" 7200RPM</li>
            <li>Gigabyte Radeon RX 460 4GB WINDFORCE OC</li>
            <li>Fractal Design Core 1100 MicroATX Mini Tower</li>
            <li>EVGA 450W 80+ Bronze Certified ATX</li>
        </ul>
    
    
        <h3>Description:</h3>
        <p></p>
    
    </div>
</div>
</div>
 
    
</body>

</html>