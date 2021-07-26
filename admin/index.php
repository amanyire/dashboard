<?php
 session_start();
  if(!function_exists("clean_data")){
  include("../security.php");
  }
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Eyeeza ICT</title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="login/css/style.css">

    
    
    
  </head>

  <body>

    
<!-- Mixins-->
<!-- Pen Title-->
<P>&nbsp;</P>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form method="post" action="">
      <div class="input-container">
        <input type="text" id="Username" name="username" required="required"/>
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password" name="password" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button class="title" style="background-color:#CC0033"><span>Go</span></button>
      </div>
	  <div class="footer" style="color:#CC0000"><?php
	  if(isset($_REQUEST['username'],$_REQUEST['password'])){
	  $username=($_REQUEST['username']);
	  $pass=($_REQUEST['password']);
	  include("../connect.php");
	  $sel=mysql_query("select * from account where username='$username' && password='$pass'")or die(mysql_error());
	  $val=mysql_fetch_array($sel);
	  if($val){
	   
		$_SESSION['aid']=$val['aid'];
		//header("Location:admin/");
		echo '<META http-equiv="refresh" content="0;URL=admin/"><img src="images/load.gif" />';

	  }else{
	  echo "Invalid username or password.";
	  }
	  }
	  ?></div>
	  
      <div class="footer"><a href="#">Forgot your password?</a></div>
    </form>
  </div>
 <!-- <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form>
      <div class="input-container">
        <input type="text" id="Username" required="required"/>
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Repeat Password" required="required"/>
        <label for="Repeat Password">Repeat Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Next</span></button>
      </div>
    </form>
  </div>-->
</div>   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
