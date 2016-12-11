<?php

    session_start();

?>
<?php 

 // Connects to your Database 

 mysql_connect("127.0.0.1", "cavinn", "") or die(mysql_error()); 

 mysql_select_db("users") or die(mysql_error()); 


 //Checks if there is a login cookie

 if(isset($_COOKIE['ID_my_site']))


 //if there is, it logs you in and directes you to the members page

 { 
 	$username = $_COOKIE['ID_my_site']; 

 	$pass = $_COOKIE['Key_my_site'];

 	 	$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error());

 	while($info = mysql_fetch_array( $check )) 	

 		{

 		if ($pass != $info['password']) 

 			{

 			 			}

 		else

 			{

 			header("Location: Mainpage.php");



 			}

 		}

 }


 //if the login form is submitted 

 if (isset($_POST['submit'])) { // if form has been submitted



 // makes sure they filled it in

 	if(!$_POST['username'] | !$_POST['pass']) {

 		die('You did not fill in a required field.');

 	}

 	// checks it against the database



 	if (!get_magic_quotes_gpc()) {

 		$_POST['email'] = addslashes($_POST['email']);

 	}

 	$check = mysql_query("SELECT * FROM users WHERE username = '".$_POST['username']."'")or die(mysql_error());



 //Gives error if user dosen't exist

 $check2 = mysql_num_rows($check);

 if ($check2 == 0) {

 		die('That user does not exist in our database. <a href=registration.php>Click Here to Register</a>');

 				}

 while($info = mysql_fetch_array( $check )) 	

 {

 $_POST['pass'] = stripslashes($_POST['pass']);

 	$info['password'] = stripslashes($info['password']);

 	$_POST['pass'] = md5($_POST['pass']);



 //gives error if the password is wrong

 	if ($_POST['pass'] != $info['password']) {

 		die('Incorrect password, please try again.');

 	}

else 

 { 

 
 // if login is ok then we add a cookie 

 	 $_POST['username'] = stripslashes($_POST['username']); 
 	 $_SESSION['username'] =  $_POST['username'];

 	 $hour = time() + 3600; 

 setcookie(ID_my_site, $_POST['username'], $hour); 

 setcookie(Key_my_site, $_POST['pass'], $hour);	 

 

 //then redirect them to the members area 

 header("Location: Mainpage.php"); 

 } 

 } 

 } 

 else 

{	 

 

 // if they are not logged in 

 ?> 
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

    <title>Signin Page</title>
  
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
 
 <div id="container">
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
      
      
      <h1>Please sign in!</h1>
      
    
      <input type="text" name="username"  placeholder="Username" class="form" ><br>
      
    
      <input type="password" name="pass"  placeholder="Password" class="form"><br>
      
 
      
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
       <p>pcpartpicker@hotmail.com</p>
       
       
       </div>
    
     
      
        </center>
    </footer>
 




    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  
  
  
  
  
  
  </body>
</html>
<?php
}
?>