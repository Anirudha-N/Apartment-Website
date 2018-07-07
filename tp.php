<html>
<h1><center> welcome to Shree Kripa</center></h1><br />
<h2><center> make your regestration as a new member sucessfull</center></h2><br />
<font size="5">
<body background="http://www.traemcneely.com/wp-content/uploads/2011/08/wpid-000030361.jpg" height="500" width="500" >
<!body bgcolor="green">
<form action ="tp.php" method="post">
<form type="hidden" name="ip" value="true">
<center>SIGN UP AS<br/></center>
MEMBER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BUILDER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      OTHERS <br/>
<input type="image" src="mem.jpg" name="tpp" value="mem" height="140" width="140" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="image" src="owner.jpg" name="tpp" value="owner" height="140" width="140" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="image" src="other.jpg" name="tpp" value="other" height="140"  width="140">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</form>
</font>

<br/><br/>

<font face="MV BOLI" color="red" align="right" size="10"> YOUR SAFETY OUR RESPONSIBILITY</font>
<form action="log.php" method="post">
<font size=10><input type="submit" value="log in" align="right" style="height:50px; width:100px ">
</font>
</html>	



<?phpif(isset($_POST["ip"])==true)
{?>
<html>

<h2><center>REGESTER NEW USER</center></h2><br />
<font size="5">

<body bgcolor="pink">


<form action ="regster.php" method="post">
<input type="hidden" name="str" value="true">

	name:<input type="text" name="nme" value="enter name"/>*<br>
	<br >user id:<input type="text" name="ui">*<br>
	<br>password:<input type="password" name="pass">*</br><br>
	phn no:<input type="tel" name="num">*<br><br> 
	sex: female<input type="radio" name="rd" value="f" >male<input type="radio" name="rd" value="m" > *<br>
	 <?php if
$k=$_POST["tpp"];
?><input type="hidden" name="belongs" value=<?=$k?>><?php?><?php
if($k=="mem"||$k=="owner")
{ ?>

	<br>Flat no.<input type="text" name="fno">*
  <br><br>authentication no.<input type="text" name="security">*
<?php }?> 

	
	<br><br>comment<br> <textarea name="comm" rows="5" columns="10"></textarea><br>
	<br><input type="submit" value="submit" style="height:40px; width:80px"/><br>
	<br>
	
</form>
<form action="search.php" method="post">
<input type="submit" value="login" align="right" style="height:50px; width:100px" >
</form>


 
</body>
</font>
</html>
<?php}?>
