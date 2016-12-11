<?php 

//prevents users that aren't signed from entering.
session_start();

 // Connects to your Database 

 mysql_connect("127.0.0.01", "cavinn", "") or die(mysql_error()); 

 mysql_select_db("users") or die(mysql_error()); 

 
 //checks cookies to make sure they are logged in 

 if(isset($_COOKIE['ID_my_site'])) 

 { 

 	$username = $_COOKIE['ID_my_site']; 

 	$pass = $_COOKIE['Key_my_site']; 

 	 	$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error()); 

 	while($info = mysql_fetch_array( $check )) 	 

 		{ 

 

 //if the cookie has the wrong password, they are taken to the login page 

 		if ($pass != $info['password']) 

 			{ 			header("Location: login.php"); 

 			} 

 

 //otherwise they are shown the admin area	 

 	else 

 			{ 


 			} 

 		} 

 		} 

 else 

 //if the cookie does not exist, they are taken to the login screen 

 {			 

 header("Location: login.php"); 

 } 
 ?> 

 	

<!DOCTYPE html>
<html>
<head>
  
  
  
    <title>Main Page</title>

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
<div class="container">

<div class="container">
      <div class="row">
		<div class="col-xs-12">
		    <center>
          <h1><img id="banner" src="resources/banner.png" alt="Banner"/></h1>
            </center>
        </div>
    </div> 
</div>

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



<div class="row">
    <div  class="col-md-12">
        <form method="post" class="form" >
            <center>
                         <h3>MotherBoard</h3>
                <select  class="size">
                     <?php
                //load the xml string using simplexml  
                $xml=simplexml_load_file("parts.xml");
                //loop through the each node of user  
            
                foreach ($xml->motherboard as $motherboard){
                
               echo '<option value='.$motherboard->name.'>';
               //access attribute  
               //subnodes are accessed by -> operator 
               echo $motherboard->name;  
               echo '</option>';
            
                
                }  
            
                ?>
    
    </select><br>
</center>
    
    <center>
 <h3>Graphics Card</h3>
     <select class="size">
                <?php
        
            $xml=simplexml_load_file("parts.xml");
         
        
            foreach ($xml->graphics as $graphics){
            
           echo '<option value='.$graphics->name.'>';
           echo $graphics->name;  
           echo '</option>';
          
        
                }  
                
                ?>
    </select><br>
    </center>
    
    <center>
    <h3>Ram</h3>
<select class="size">
        
        
            <?php
        $xml=simplexml_load_file("parts.xml");


            foreach ($xml->ram as $ram){
           echo '<option value='.$ram->name.' >';
           echo $ram->name;  
           echo '</option>';
        
            }  
        
            ?>
              </select>  
            </center>
            
             
<center>
    <h3>Keyboards</h3>
        <select class="size">
    <?php
      
        $xml=simplexml_load_file("parts.xml");


            foreach ($xml->keyboard as $keyboard){
           echo '<option value='.$keyboard->name.' >';
           echo $keyboard->name;  
           echo '</option>';
        
            }  
        
     ?>    
        
            
 </select>  
</center>


<center>
    <h3>Mouse</h3>
        <select class="size">
    <?php
      
        $xml=simplexml_load_file("parts.xml");


            foreach ($xml->mouse as $mouse){
           echo '<option value='.$mouse->name.' >';
           echo $mouse->name;  
           echo '</option>';
        
            }  
        
     ?>    
        
            
 </select>  
</center>
            
            
            
            
            
            
                                                <p>
                                                        <?php
                                                       $xml=simplexml_load_file("parts.xml");
                                                       
                                                        if(isset($_POST['submit'])){
                                                         
                                                         foreach ($xml->motherboard as $motherboard){
                                                            
                                                             echo $motherboard->price;
                                                             
                                                         }
                                                        }
                                                         else{
                                                           echo "";  
                                                         }
                                                        ?>
                                                 </p>      
                                                        
                                                        
                                                        
    <br><input type="submit" value="submit" class="button"/>
</form>
</div>
</div>
            
            
            
           
           <p value="$motherboard"></p>
            
            
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
 
            
        
        
        
        
        
        
        
        
        
    </body>
</html>
