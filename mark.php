
<style type="text/css">
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

<fieldset>
<div class="form-style-5">
<h2><center>REGESTER NEW USER</center></h2><br />
<font size="5">

<div class="form-style-5">
<body bgcolor="pink">

  <li><center><h3>STEP:2<h3></center></li>
</fieldset><br>
<fieldset>

<form action ="regster.php" method="post" class="form-style-5">

<input type="hidden" name="str" value="true">
	<legend><span class="number">1</span>FILL THE FORM</legend>

	Name:*<input type="text" name="nme" placeholder="Your Name"/>
	User id:*<input type="text" name="ui" value="Your email">
	Password:*<input type="password" name="pass" placeholder="Password"><br>
	Contact no:*<input type="tel" name="num"> 
	Sex:*<br><br> female<input type="radio" name="rd" value="f" >&nbsp male<input type="radio" name="rd" value="m" >
	 <br><?php
$k=$_POST["tpp"];
?><input type="hidden" name="belongs" value=<?=$k?>><?php?><?php
if($k=="mem"||$k=="invester")
{ ?>

	<br>Flat no.*<input type="text" name="fno">
  <br><br>authentication no.*<input type="text" name="security">
<?php }?> 
</fieldset><br>
<fieldset>	
	
	<div class="form-style-5">
	<br><input type="submit" value="submit" style="height:60px; width:120px"/><br>
	<br>
</fieldset>

 </div>
</body>
</font>
</html>

