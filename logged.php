<html>
<body>
<style>

td, th {
  width: 4rem;
  height: 2rem;
  border: 1px solid #ccc;
  text-align: center;
}
th {
  background: lightblue;
  border-color: white;
}
	
.form-style-5{
    max-width: 500px;
    padding: 10px 20px;
    background: #f4f7f8;
    margin: 10px auto;
    padding: 20px;
    background: #f4f7f8;
    border-radius: 8px;
    font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-5 fieldset{
    border: none;
}
.form-style-5 legend {
    font-size: 1.4em;
    margin-bottom: 10px;
}
.form-style-5 label {
    display: block;
    margin-bottom: 8px;
}
.form-style-5 input[type="password"],
.form-style-5 input[type="tel"],
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],
.form-style-5 input[type="datetime"],
.form-style-5 input[type="email"],
.form-style-5 input[type="number"],
.form-style-5 input[type="search"],
.form-style-5 input[type="time"],
.form-style-5 input[type="url"],
.form-style-5 textarea,
.form-style-5 select {
    font-family: Georgia, "Times New Roman", Times, serif;
    background: rgba(255,255,255,.1);
    border: none;
    border-radius: 4px;
    font-size: 16px;
    margin: 0;
    outline: 0;
    padding: 7px;
    width: 100%;
    box-sizing: border-box; 
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box; 
    background-color: #e8eeef;
    color:#8a97a0;
    -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    margin-bottom: 30px;
    
}

.form-style-5 input[type="password"]:focus,
.form-style-5 input[type="tel"]:focus,
.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="search"]:focus,
.form-style-5 input[type="time"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 textarea:focus,
.form-style-5 select:focus{
    background: #d2d9dd;
}
.form-style-5 select{
    -webkit-appearance: menulist-button;
    height:35px;
}
.form-style-5 .number {
    background: #1abc9c;
    color: #fff;
    height: 30px;
    width: 30px;
    display: inline-block;
    font-size: 0.8em;
    margin-right: 4px;
    line-height: 30px;
    text-align: center;
    text-shadow: 0 1px 0 rgba(255,255,255,0.2);
    border-radius: 15px 15px 15px 0px;
}

.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]
{
    position: relative;
    display: block;
    padding: 19px 39px 18px 39px;
    color: #FFF;
    margin: 0 auto;
    background: #1abc9c;
    font-size: 18px;
    text-align: center;
    font-style: normal;
    width: 100%;
    border: 1px solid #16a085;
    border-width: 1px 1px 3px;
    margin-bottom: 10px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover
{
    background: #109177;
}

</style>
<?php
@session_start();
$con=mysqli_connect("localhost","te","123","tecomp");

	$a=$_SESSION['varname'];
	$b=$_SESSION['varname1'];
//	include("common.php");
	echo"<div class='form-style-5'>";
	
echo"<fieldset>";
	echo "<object align='right'><br><br> WELCOME $a <br><br></object>";
	//echo"<form>"
	
	echo '<table colspan=7 cellpadding=20>';
	echo"<table class='imagetable'>";

	echo"<table style='margin-left:-100px'>"; 
		echo '<tr><th>NAME</th><th>USER ID</th><th>SEX</th><th>PHONE NO.</th><th>IDENTITY</th><th>FLAT NO</th><th>AMOUNT</th><th>DUE DATE</th><th>STATUS</th></tr>';

		$res=mysqli_query($con,"SELECT * FROM maintain,society WHERE maintain.flatno=$b AND society.flatno=$b");
		while($row=mysqli_fetch_array($res,MYSQL_ASSOC))
		{
			echo "<TR><th>{$row['name']}</th><th>{$row['uid']}</th><th>{$row['sex']}</th><th>{$row['phnno']}</th><th>{$row['identity']}</th><th>{$row['flatno']}</th><th>{$row['amount']}</th><th>{$row['duedate']}</th><th>{$row['status']}</th></tr>";
		}
				echo'</table>';

echo"</fieldset>";

echo"<fieldset>";	
	$res=mysqli_query($con,"SELECT meet,date,time FROM meeting");
	while($row=mysqli_fetch_array($res,MYSQL_ASSOC))
	{
		echo"<br><br><br><h4> THERE IS A MEETING ON '{$row['date']}' AT '{$row['time']}'";
	}
		
	if($a=="S K Jaju")
	{
	//	include("common.php");
		echo"<div class='form-style-5'>";
	
	echo "<br><br><br><form action='logged.php' method='post'>";
	echo "CHECK THE MAINTENANCE RECORDS<br><br>";
	echo "<input type='hidden' name='str' value='true'>";
	echo "<input type ='submit' name='sel' value='VIEW'><br><br>";
	echo"<input type ='submit' name='sel' value='SEARCH'><br><br>";
	echo"<input type ='submit' name='sel' value='MODIFY'><br><br>";
	echo "<input type ='submit' name='sel' value='CALL FOR MEETING'><br><br> ";
	echo "<input type='submit' name='sel' value='SHOW GRAPHS'><br><br>";
	echo"</form>";
	if(isset($_POST['str'])){
	$b=$_POST["sel"];
	$_SESSION['ses']=$b;
	if($b=="SEARCH")
	{
		//include("search.php");
		
	
		header('Location: search.php');
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=search.php">'; 
	}
	
	if($b=="MODIFY")
	{
		//header('Location: search.php');
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=search.php">'; 
			exit;
			}
	
	
	if($b=="VIEW")
	{
		echo '<table colspan=7 cellpadding=10>';
		echo '<tr><th>FLAT NO</th><th>AMOUNT</th><th>DUE DATE></th><th>STATUS</th></tr>';

		$res=mysqli_query($con,"SELECT flatno,amount,duedate,status FROM maintain");
		while($row=mysqli_fetch_array($res,MYSQL_ASSOC))
		{
			echo "<tr><th>{$row['flatno']}</th><th>{$row['amount']}</th><th>{$row['duedate']}</th><th>{$row['status']}</th></tr>";
		}
				echo'</table>';
	}
	if($b=="CALL FOR MEETING")
	{	
		//header('Location: search.php');
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=search.php">';    
		
	}
	if($b=="SHOW GRAPHS")
	{
		//include("graph1.php");
		
		//header('Location: graph1.php');
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=graph1.php">';    
exit;
		
	}

	}
	
echo"</fieldset>";
	echo"</form>";
	}
	echo "<br><br><br><form action='log.php' method='post' >";
	echo"<br><br><br><input type='submit' value='LOG OUT' align='right' style='height:60px; width:180px'>";
	echo"</form>";
	
	?>
</form>
</body>
</html>