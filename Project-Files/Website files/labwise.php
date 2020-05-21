<!DOCTYPE html>
<html>
<head>
<style>
a:link, a:visited {
  background-color: #376482;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #40e317;
}
</style>
</head>
<body>
<link rel="stylesheet" type="text/css" href="loginv1.css">
<div align=center>
<h3   style="font-family: verdana; font-size:40px;color:cyan; text-align: center;">Select Lab</h3>
<br><br><br><br><br>

<?php 
$username = $_GET['a'];
$pass='123456';

if($username=='vsbadgujar')
{
	echo "<a href='https://homogenetic-gears.000webhostapp.com/302.php' target='_blank'>302</a>";
	echo "<br/><br/>";
	echo "<a href='https://homogenetic-gears.000webhostapp.com/405.php' target='_blank'>405</a>";
}

if($username=='nahidshaikh')
{
	echo "<a href='https://homogenetic-gears.000webhostapp.com/308.php' target='_blank'>308</a>";
	echo "<br/><br/>";
	echo "<a href='https://homogenetic-gears.000webhostapp.com/309.php' target='_blank'>309</a>";
}

if($username=='snehakanchan')
{
	echo "<a href='https://homogenetic-gears.000webhostapp.com/303.php' target='_blank'>303</a>";
	echo "<br/><br/>";
	echo "<a href='https://homogenetic-gears.000webhostapp.com/317.php' target='_blank'>317</a>";
}


?>

<br><br>
<form name="form" method="POST" action="https://homogenetic-gears.000webhostapp.com/check2.php" >
	  <input type="hidden" name="username" value="<?php echo $username?>"  />  
	  <input type="hidden" name="password" value="<?php echo $pass?>" />
	  <input type="hidden" name="status" value="1" />
      <input style="background: #85e085;font-size: 24px;" type="submit" value="Go Back"/>
</form>
</body>
</html>