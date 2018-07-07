

<?php

if(isset($_POST["str"]))
{
		include("common.php");
	$con=mysqli_connect("localhost","te","123","tecomp");
	
	$a=$_POST["nme"];
	$b=$_POST["ui"];
	$c=$_POST["pass"];
	$d=$_POST["num"];
	$e=$_POST["rd"];
	if(empty($a)|empty($b)|empty($c)|empty($d)|empty($e))
		{echo"<center><h3>All the Fields are Not Specified<br>Try Again!!!!!<br></h3></center>";}
	else
		{$m=$_POST['belongs'];
		if($m=="mem"|$m=="invester")
		{
		$f=$_POST["fno"];
		$s=$_POST["security"];
			if(empty($f)|empty($s))
			{echo "<center><h3>Flat no. or Authentication no. Not Entered<br />Try Again!!!</center><br><h3> ";}
			else
			{
			$sql="SELECT authen FROM society WHERE flatno=$f";
			$res=mysqli_query($con,$sql);
			$row=mysqli_fetch_array($res,MYSQL_ASSOC);

				if($s=="{$row["authen"]}")
				{	$res=mysqli_query($con,"SELECT COUNT(*) FROM society WHERE pass='$c' OR uid='$b'");
					$row=mysqli_fetch_array($res,MYSQL_ASSOC);
						if("{$row["COUNT(*)"]}">0)
						{echo "error";}
					else{
					$sql1="UPDATE society SET name='{$a}',uid='{$b}',pass='{$c}',phnno='{$d}',sex='{$e}',identity='{$m}' WHERE flatno=$f";
					$res=mysqli_query($con,$sql1);
					echo"<center><h3> Signup Successfull</h3></center><br><br>";
					}
				}
				else
				{echo"<center><h3>Authentication Failed<br /> Try Again!!!!</h3></center>";}
			}}
		else
		{$p=NULL;
			
		$res=mysqli_query($con,"SELECT COUNT(*) FROM society WHERE pass='$c' OR uid='$b'");
		$row=mysqli_fetch_array($res,MYSQL_ASSOC);
		$res1=mysqli_query($con,"SELECT COUNT(*) FROM other WHERE pass='$c' OR uid='$b'");
		$row1=mysqli_fetch_array($res1,MYSQL_ASSOC);
		
		if("{$row["COUNT(*)"]}">0)
			{echo "error";}
		else if("{$row["COUNT(*)"]}">0)
			{echo "error";}
		
		else{
			echo"<center><h3> Signup Successfull</h3></center><br><br>";
			$sql2="INSERT INTO other(name,uid,pass,phnno,sex) VALUES ('$a','$b','$c','$d','$e')";
			$r=mysqli_query($con,$sql2);
			if(!$r)
				echo"error";
			}

		}
}
}
?>

<html>
<body>

<fieldset>
<center>
<font size="10">
<div class="form-style-5">
<form action="society.php" method="post">

<input type="submit" name="signup" value="SIGNUP AGAIN" align="right" style="height:60px; width:180px" >

</fieldset>
</form>
<fieldset>

<div class="form-style-5">
<form action="log.php" method="post">
<center><input type="submit" value="LOGIN" align="right" style="height:60px; width:120px" >

</font>
</form>
</fieldset>

<fieldset>

<div class="form-style-5">
<form action="main.php" method="post">
<center><input type="submit" value="MAIN PAGE" align="right" style="height:60px; width:200px" >

</font>
</fieldset>

</center>
</body>
</html>


