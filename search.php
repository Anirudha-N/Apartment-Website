<html>
<body>
<style>
table, th, td {
    border: 1px solid blue;
}
</style>


<?php

session_start();
$con=mysqli_connect("localhost","te","123","tecomp");
		$k=$_SESSION['ses'];
	include("common.php");
		echo"<div class='form-style-5'>";
	
		echo "<center><h3>WELCOME TO THE BIGGEST $k ENGINE</h3></center>";
		if($k=='SEARCH'){
		echo "<form action='search.php' method='post'>";
		echo "<br><br><br>SEARCH BY<br><br><br>";
		echo "<select name='down'>";
		echo " <option value='flatno' >FLAT NO.</option>";	
		echo " <option value='amount' >AMOUNT</option>";
		echo " <option value='duedate' >DUE DATE</option>";	
		echo " <option value='status' >STATUS</option>";
		echo "</select>";
		echo "         enter ";
		echo "             <input type='text' name='box'>";
		echo "<input type='hidden' name='str1' value='true'>";
		echo "<input type='submit' >";
		echo "</form>";
		
	if(isset($_POST['str1']))
	{		
$a=$_POST["down"];
$b=$_POST["box"];
	echo '<center><table colspan=7 cellpadding=10>';
		echo '<tr><th>FLAT NO</th><th>AMOUNT</th><th>DUE DATE></th><th>STATUS</th></tr>';

 $res=mysqli_query($con,"SELECT * FROM maintain WHERE $a='$b'");
	 while($row=mysqli_fetch_array($res,MYSQL_ASSOC))
	 {
		echo "<tr><th>{$row['flatno']}</th><th>{$row['amount']}</th><th>{$row['duedate']}</th><th>{$row['status']}</th></tr>";
				 
	 }
			echo'</table>';

	 
		}}
		else if($k=="MODIFY")
		{
			echo "<form action='search.php' method='post'>";
		echo "<br><br><br>MODIFY<br><br><br>";
		echo "FLAT NO. \t <input type='text' name=flt><br>";
		echo "AMOUNT \t <input type='text' name='amt'><br>";	
		echo "DUE DATE \t <input type='date' name='dd'><br>";
		echo " STATUS \t <input type='text' name='stat'><br>";	
		
		
		echo "<input type='hidden' name='str2' value='true'>";
		echo "<input type='submit' >";
		echo "</form>";
			
		if(isset($_POST["str2"]))
		{
			$a=$_POST['flt'];
			$b=$_POST['amt'];
			$c=$_POST['dd'];
			$d=$_POST['stat'];
			$res=mysqli_query($con,"UPDATE maintain SET flatno='$a',amount='$b',duedate='$c',status='$d' WHERE flatno='$a'");
			if($res){echo"\t\t ";}
		}			
			
		}
		else
		{
			echo"<form action='search.php' method='post'>";
		echo"<br><br>";
		echo"MEETING ON WHICH DATE<br><br><input type='date' name='datte'>";
		echo"<br><br> TIMING\t\t<input type='time' name='tym'> ";
		echo"<br><br> DO YOU WANT TO INFORM ALL MEMBERS<br>\t\t YES <input type='radio' name='rad' value='yes'>";
		echo"<br>\t\t NO<input type='radio' name='rad' value='no'>";
		echo "<input type='hidden' name='str3' value='true'><br><br>";
		
		echo"<input type='submit'>";
		echo"</form>";
		if(isset($_POST["str3"]))
		{
			echo"<h4>MEETING IS SCHEDULED<h4>";
			$a=$_POST["rad"];
			$b=$_POST["datte"];
			$c=$_POST["tym"];
			$res=mysqli_query($con,"INSERT INTO meeting(meet,date,time) VALUES('$a','$b','$c')");
		}
		}

		echo "<form action='logged.php' method='post'>";
	    echo "<input type='submit' value='BACK'>";
		echo "</form>"
	
?>
</body>
</html>