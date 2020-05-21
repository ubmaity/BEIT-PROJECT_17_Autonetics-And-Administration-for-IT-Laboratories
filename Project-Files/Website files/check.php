<link rel="stylesheet" type="text/css" href="login.css">

<script type="text/javascript">
function new_window() 
{
	window.open("http://moodle.apsit.org.in/moodle", '_blank');
	
}
</script>
<?php
//error_reporting(0);
$ip = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);
echo $ip;
$username = $_POST["username"];
$password = $_POST["password"];
$batch = $_POST["select1"];
$subject = $_POST["select2"];
$room = $_POST["select3"];
$user = 'id10740292_root';
$pass = '123456';
$db='id10740292_sample';
$t = date('d-m-Y H:i:s',time());

$currentTime = date('H:i');
$currentTime=strval($currentTime);
$con=mysqli_connect('localhost',$user,$pass,$db) or die(mysqli_error());
$query = "SELECT name FROM login WHERE id='$username' AND password='$password'";
$result = mysqli_query($con,$query)or die(mysqli_error($con));

while($row=$result->fetch_assoc())
{
	$a=$row['name'];
}
if($a==''||$a==NULL)
{
	echo "<script type='text/javascript'>alert('Invalid Credentials');</script>";
	echo"<script type='text/javascript'>window.location.href = 'https://homogenetic-gears.000webhostapp.com/login.html';</script>";
}
else
{	$query1 = "SELECT year FROM login WHERE id='$username'";
	$result1 = mysqli_query($con,$query1)or die(mysqli_error($con));
	while($row1=$result1->fetch_assoc())
{
	$a1=$row1['year'];
}
	$query = "INSERT INTO id10740292_root(username,batch,subject,room,date_time,year) VALUES('$username','$batch','$subject','$room',NOW(),'$a1')";
	mysqli_query($con,$query)or die(mysqli_error($con));
	echo "<h1><script type='text/javascript'>alert('Welcome $a');</script></h3>";
	echo "<h1 align=center style='color:yellow;'>Hi ".$a. "( ".$username." )! Your entry has been successfully recorded.</h1>";
	
	echo "<h1 align=center style='color:yellow;'>You can now start performing your practical.</h1>";
}
?>
<input style="background: #85e085;font-size: 35px;text-align: center; position: absolute;top: 50%;left: 50%;" type="button" value="OK" onclick="new_window();"/>

