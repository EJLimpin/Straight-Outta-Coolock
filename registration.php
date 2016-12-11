<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Registration Page</title>
  
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
    
</head>




<?php 
// Connects to your Database 

mysql_connect("127.0.0.1", "cavinn", "") or die(mysql_error()); 

mysql_select_db("users") or die(mysql_error()); 


//This code runs if the form has been submitted

if (isset($_POST['submit'])) { 



//This makes sure they did not leave any fields blank

if (!$_POST['username'] | !$_POST['pass'] | !$_POST['pass2'] ) {

die('You did not complete all of the required fields');

}



// checks if the username is in use

if (!get_magic_quotes_gpc()) {

$_POST['username'] = addslashes($_POST['username']);

}

$usercheck = $_POST['username'];

$check = mysql_query("SELECT username FROM users WHERE username = '$usercheck'") 

or die(mysql_error());

$check2 = mysql_num_rows($check);



//if the name exists it gives an error

if ($check2 != 0) {

die('Sorry, the username '.$_POST['username'].' is already in use.');

}


// this makes sure both passwords entered match

if ($_POST['pass'] != $_POST['pass2']) {

die('Your passwords did not match. ');

}



// here we encrypt the password and add slashes if needed

$_POST['pass'] = md5($_POST['pass']);

if (!get_magic_quotes_gpc()) {

$_POST['pass'] = addslashes($_POST['pass']);

$_POST['username'] = addslashes($_POST['username']);

}



// now we insert it into the database

$insert = "INSERT INTO users (username, password)

VALUES ('".$_POST['username']."', '".$_POST['pass']."')";

$add_member = mysql_query($insert);



//css stops functioning when php tags are above head


?>


<div id="contianer">
<div class="row">
        <div  class="col-md-12">
      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
          </div>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
          </div>
       </div> 
    </div>
</div>


<h1>Registered</h1>

<p>Thank you, you have registered - you may now login</a>.</p>






<body>
<?php 
} 

else 
{	
?>



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


<div id="contianer">
<div class="row">
        <div  class="col-md-12">
      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
          </div>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
          </div>
       </div> 
    </div>
</div>

<div id="container">
  <div id="login">
    <div id="row">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      
      
      <h1>Please create an account!</h1>
      
    
      <input type="text" name="username"  placeholder="Username" class="form" ><br>
      
    
      <input type="password" name="pass"  placeholder="Password" class="form"><br>
      
      <input type="password" name="pass2"  placeholder="Re-enter password" class="form"><br>
      
      <div id ="label">
      <label>
          <input type="checkbox" value="remember-me"> Remember me
     </label><br>
      </div>
      
      <button class="button" type="submit" name="submit" value="Register">Sign in</button>
      
    </form>
    </div><!--login-->
  </div><!--row-->


</div>


</div>



 <footer>
        <center>
      <div id="lfooter">
    <img src="resources/map.png" height="100px" width="100px"/>    
     <h2 >Find us.</h2>
     <p>123 Fake Street, Dublin Ireland.</p>
       </div>
       
       <div id="rfooter">   
    <img src="resources/phone.png" height="100px" width="100px"/>
    <h2>Call Us.</h2>
    <p>+353 123 456 7890</p>
        </div>
      
      <div id="mfooter">
          
     <img src="resources/email.png" height="100px" width="100px"/>
       <h2>Need help?</h2>
       <p>pcpartpicker@gmail.com</p>
       </div>
      </center>
</footer>
 





<?php

}
?>

</body>
