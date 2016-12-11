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
    
    
    <link rel="stylesheet" href="style.css"/>
    
</head>

<body>
    <div id="container">
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
  <img class="mySlides" src="budget2/img1.jpg" style=" height:500px; width:30%">
  <img class="mySlides" src="budget2/img2.jpg" style="height:500px; width:30%">
  <img class="mySlides" src="budget2/img3.jpg" style="height:500px; width:30%">
  <img class="mySlides" src="budget2/img4.jpg" style="height:500px; width:30%">
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
        
        <h3>£900 Entry-Level</h3>
        
        
        <h3>Specs:</h3>
        <ul>
            <li>AMD FX-8350 4.0GHz 8-Core</li>
            <li>Cooler Master Hyper 212 EVO 82.9 CFM SleeveBearing</li>
            <li>ASRock 990FX Killer ATX AM3+</li>
            <li>Crucial Ballistix Sport 8 GB (2 X 4Gb) DDR3-1600</li>
            <li>KingSton SSDNow UV400 120GB 2.5"SSD</li>
            <li>Western Digital Blue 1 tTB 3.5" 5400RPM</li>
            <li>MSI Radeon RX 480 8GB Gaming X</li>
            <li>DIYPC D480-BK-Window ATX Mid Tower</li>
            <li>DCorsair CSM 650W 80+ Gold Certified Semi-Modular ATX</li>
            <li>NZXT Sentry 2</li>
        </ul>
    
    
        <h3>Description:</h3>
        <p></p>
      <li></li>  Without monitors and items like Windows 10, the total on here comes to around $1050.00. By shopping around and using rebates I believe I have about $800.00 total invested. The Samsung 300 was used on old PC, the 390 was found new but open box for $70.00. FX 8350 is currently OC at 4400MHz combo of bus and multiplier.

Will add better description and OC settings soon as school lets up. Thanks for looking, constructive comments welcomed.

    
    </div>
</div>
</div>
    
</body>

</html>