<!DOCTYPE HTML>
<html>

<head>
  <meta charset="UTF-8">
  <title> LOG IN </title>
  <link href="images/favicon.ico" type="image" rel="icon">
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <!-- stylesheets -->
<!--  <link href="css/style.css" rel="stylesheet" type="text/css" />
 <link href="css/colour.css" rel="stylesheet" type="text/css" /> -->
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    <!-- THIS IS FROM INDEX.HTML.. -->
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="menubar.css">
   <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

        <link rel="stylesheet" href="css/login.css">

</head>

<body>
	<div class="header">
		<div class="logo"><img src="images/soclogo2.jpg" width=400 height=110 /></div>
	</div>
	<div class = "container">
	<div id='cssmenu'>
		<ul>
			<li><a href='index.html'><span>Home</span></a></li>
			<li><a href='ManagingCommittee.html'><span>Managing Committee</span></a></li>
			<li><a href='E&G.html'><span> Upcoming Events</span></a></li>
			<li><a href='visual_tour.html'><span>Gallery</span></a></li>
			<li class ='active'><a href='log.php'><span>Login</span></a></li>
			<li class='last'><a href='society.php'><span>Sign up</span></a></li>
		</ul>
	</div>	
    <div><font face = "Droid Serif" size="2" color="#FFFFFF"><p align = "center">HILL VIEW HOUSING SOCIETY</p></font></div>
	</div>
 
 <div class="login-card">
  <form action="log.php" method="post">
  <h1>Log In</h1>
<br><input type="text" name="user" value="Enter">  <br>
<br><input type="password" name="pass" placeholder="Password"><br>
<input type="submit" name="login" class="login login-submit" value="login">
<input type="hidden" name="stkt" value="true">
<!form action='main.php' method='post'>
</form> 
<!/form>
  <div class="login-help">
    <a href="#">Sign Up ?</a> • <a href="#">Forgot Password ?</a>
  </div>
</div> 


<!--<div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
 	<!-- begin footer -->	
	<div style="clear:both"></div>
	<div class="footer">
		<div class="footerBox">
			<div class="footerMenu">Copyright &copy; Hill View Housing Society(India) Pvt Ltd. All rights reserved.</div>
			<div class="footerMenuCopy"><a href=http://pvgcoet.ac.in/">Designers of pvg coet,Pune</a>.</p>
			<p><a href="https://twitter.com/"> <img src="images/twitter.png" alt="twitter" /> </a> &nbsp;<a href="https://www.facebook.com/"><img src="images/facebook.png" alt="facebook" /></a>&nbsp;<a href="https://www.rss.com/"><img src="images/rss.png" alt="rss"/></a></div>
		</div>
	</div>
	<!-- end footer -->
	<!-- javascript at the bottom for fast page loading -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
	<script type="text/javascript" src="js/jquery.sooperfish.js"></script>
	<script type="text/javascript" src="js/image_fade.js"></script>
	<!-- initialise sooperfish menu -->
	<script type="text/javascript">
		$(document).ready(function() {
		  $('ul.sf-menu').sooperfish();
		});
	</script>
</body>
</html>

<?php
if(isset($_POST["stkt"])){
session_start();
$con=mysqli_connect("localhost","te","123","tecomp");


	$a=$_POST["user"];
	
	$b=$_POST["pass"];


//On second page
	

	if(empty($a)|empty($b))
		{	echo '<script>';
			echo 'alert("username or password cant be empty")';
			echo '</script>';
		}
		else{
	
	$res=(mysqli_query($con,"SELECT COUNT(*) FROM society WHERE uid='$a' "));
	$row=mysqli_fetch_array($res,MYSQL_ASSOC);
	$res1=(mysqli_query($con,"SELECT COUNT(*) FROM other WHERE uid='$a' "));
	$row1=mysqli_fetch_array($res1,MYSQL_ASSOC);
	
	("{$row["COUNT(*)"]}">0)?$k='society':(("{$row1["COUNT(*)"]}">0)?$k='other':$k='none');
	
	if($k=="society"|$k=="other"){
	$res=(mysqli_query($con,"SELECT pass FROM $k WHERE uid='$a' "));
	$row=mysqli_fetch_array($res,MYSQL_ASSOC);
	if($b=="{$row["pass"]}"){echo"success"; 
		$res=(mysqli_query($con,"SELECT name,flatno FROM $k WHERE uid='$a'"));
        $row=mysqli_fetch_array($res,MYSQL_ASSOC);
		$_SESSION['varname'] = "{$row["name"]}";
		$_SESSION['varname1'] = "{$row["flatno"]}";
		header('Location: logged.php');
		

	}}
	
		else{	echo '<script>';
			echo 'alert("INCORRECT username or password")';
			echo '</script>';
		
		}}

			
		
}
?>
   




