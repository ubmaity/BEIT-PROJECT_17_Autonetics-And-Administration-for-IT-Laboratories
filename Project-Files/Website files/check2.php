<link rel="stylesheet" type="text/css" href="loginv1.css">
<h3   style="font-family: verdana; font-size:30px;color:#00fce3;text-align: center;">Lab Session Records</h3>
<input style="background: #85e085;font-size: 24px;" type="button" value="Logout" onclick="window.location='https://homogenetic-gears.000webhostapp.com/faculty_login.html';"/>



<?php
//$usn = $_GET['username'];
//error_reporting(0);

$n=0;
$username = $_POST["username"];
$password = $_POST["password"];
$status = $_POST["status"];


$user = 'id10740292_root';
$pass = '123456';
$pass=strval($pass);
$db='id10740292_sample';
$con=mysqli_connect('localhost',$user,$pass,$db)or die(mysqli_error());
$query = "SELECT name FROM faculty WHERE id='$username' AND password='$password'";
$result = mysqli_query($con,$query)or die(mysqli_error($con));
while($row=$result->fetch_assoc())
{
	$a=$row['name'];
}
if($a==''||$a==NULL)
{
	echo "<script type='text/javascript'>alert('Invalid Credentials');</script>";
	?>
	<script type="text/javascript">
	window.location.href = 'https://homogenetic-gears.000webhostapp.com/faculty_login.html';
	</script>
	<?php
	
}
else
{	

	if($status == 0)
	{
		echo "<h3><script type='text/javascript'>alert('Welcome $a');</script></h3>";
		$status = 1;
	}
	
	
	
	?>
	
	
	<h3   style="font-family: verdana; font-size:20px;color:#00fce3; text-align:center;">Sort By</h3>
<div style="text-align:center;">
<select name="select4" onchange="location = this.value;">
<option value="" selected>-Select-</option>
<optgroup label="Year wise">
 <option value="se1.php?a=<?php echo $username?>">SE Batch Records</option>
 <option value="te1.php?a=<?php echo $username?>">TE Batch Records</option>
 <option value="be1.php?a=<?php echo $username?>">BE Batch Records</option>
</optgroup>
 <option value="labwise.php?a=<?php echo $username?>" style="font-weight:bold;">Lab wise</option>
 <option value="useridwise1.php?a=<?php echo $username?>" style="font-weight:bold;">UserID wise</option>
</select>
</div>
<br><br><br>
	
	
	
	
	<?php
	
	
	
	
	
	
if($username=='vsbadgujar')
{
	$query = "SELECT username,batch,subject,room,date_time FROM id10740292_root WHERE room='302' OR room='405'";
	$result = mysqli_query($con,$query);
	
	
	if(mysqli_num_rows($result) == 0)
	{
		echo "<h2 style='font-size: 18px;'>No entries found currently</h2>";
	}
	else if(mysqli_num_rows($result) > 0)
	{
		echo "
		<table align='center' style='top:50%;left:50%;'>
		<tr style='background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);top:50%;left:50%;'>
		<th style='font-size: 25px;'>Sr No.</th>
		<th style='font-size: 25px;'>Username</th>
		<th style='font-size: 25px;'>Batch</th>
		<th style='font-size: 25px;'>Subject</th>
		<th style='font-size: 25px;'>Lab No.</th>
		<th style='font-size: 25px;'>Date and Time(yyyy-mm--dd hh:mm:ss)</th>
		
		</tr>";
		while($row = mysqli_fetch_assoc($result)) 
		{
			$n++;
			echo "<tr bgcolor='white'>";
			echo "<td style='font-size: 20px;top:50%;left:50%;text-align:center;'>" . $n. "</td> &nbsp";
			echo "<td style='font-size: 20px;top:50%;left:50%;text-align:center;'>" . $row['username'] . "</td> &nbsp";
			echo "<td style='font-size: 20px;top:50%;left:50%;text-align:center;'>" . $row['batch'] . "</td> &nbsp";
			echo "<td style='font-size: 20px;top:50%;left:50%;text-align:center;'>" . $row['subject'] . "</td> &nbsp";
			echo "<td style='font-size: 20px;top:50%;left:50%;text-align:center;'>" . $row['room'] . "</td> &nbsp";
			echo "<td style='font-size: 20px;top:50%;left:50%;text-align:center;'>" . $row['date_time'] . "</td> &nbsp";
			echo "</tr>";
			
		}
		echo "</table>";
		echo "<br/><br/>";
		echo "
		<table align='center' style='top:50%;left:50%;'>
		<tr style='background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);top:50%;left:50%;'>
		<th style='font-size: 25px;font-family: verdana;color:#327da8; text-align: center;'>Count: </th>";
		echo "<td style='font-size: 25px;font-family: verdana;color:#3A33FF; text-align: center;'>".mysqli_num_rows($result)."</td>";
		echo "</tr>";
		echo "</table>";
		echo "<br/><br/>";
		
		
	}
	}
	
	

	
	
	if($username=='nahidshaikh')
{
	$query = "SELECT username,batch,subject,room,date_time FROM id10740292_root WHERE room='308' OR room='309'";
	$result = mysqli_query($con,$query);
	
	
	if(mysqli_num_rows($result) == 0)
	{
		echo "<h2 style='font-size: 18px;'>No entries found currently</h2>";
	}
	else if(mysqli_num_rows($result) > 0)
	{
		echo "
		<table align='center' style='top:50%;left:50%;'>
		<tr style='background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);top:50%;left:50%;'>
		<th style='font-size: 25px;'>Sr No.</th>
		<th style='font-size: 25px;'>Username</th>
		<th style='font-size: 25px;'>Batch</th>
		<th style='font-size: 25px;'>Subject</th>
		<th style='font-size: 25px;'>Lab No.</th>
		<th style='font-size: 25px;'>Date and Time(yyyy-mm--dd hh:mm:ss)</th>
		
		</tr>";
		while($row = mysqli_fetch_assoc($result)) 
		{
			$n++;
			echo "<tr bgcolor='white'>";
			echo "<td style='font-size: 20px;top:50%;left:50%;text-align:center;'>" . $n. "</td> &nbsp";
			echo "<td style='font-size: 20px;top:50%;left:50%;text-align:center;'>" . $row['username'] . "</td> &nbsp";
			echo "<td style='font-size: 20px;top:50%;left:50%;text-align:center;'>" . $row['batch'] . "</td> &nbsp";
			echo "<td style='font-size: 20px;top:50%;left:50%;text-align:center;'>" . $row['subject'] . "</td> &nbsp";
			echo "<td style='font-size: 20px;top:50%;left:50%;text-align:center;'>" . $row['room'] . "</td> &nbsp";
			echo "<td style='font-size: 20px;top:50%;left:50%;text-align:center;'>" . $row['date_time'] . "</td> &nbsp";
			echo "</tr>";
			
		}
		echo "</table>";
		echo "<br/><br/>";
		echo "
		<table align='center' style='top:50%;left:50%;'>
		<tr style='background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);top:50%;left:50%;'>
		<th style='font-size: 25px;font-family: verdana;color:#327da8; text-align: center;'>Count: </th>";
		echo "<td style='font-size: 25px;font-family: verdana;color:#3A33FF; text-align: center;'>".mysqli_num_rows($result)."</td>";
		echo "</tr>";
		echo "</table>";
		echo "<br/><br/>";
		
		
	}
	}
	
	
	

	
	
	
	
	if($username=='snehakanchan')
{
	$query = "SELECT username,batch,subject,room,date_time FROM id10740292_root WHERE room='303' OR room='317'";
	$result = mysqli_query($con,$query);
	
	
	if(mysqli_num_rows($result) == 0)
	{
		echo "<h2 style='font-size: 18px;'>No entries found currently</h2>";
	}
	else if(mysqli_num_rows($result) > 0)
	{
		echo "
		<table align='center' style='top:50%;left:50%;'>
		<tr style='background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);top:50%;left:50%;'>
		<th style='font-size: 25px;'>Sr No.</th>
		<th style='font-size: 25px;'>Username</th>
		<th style='font-size: 25px;'>Batch</th>
		<th style='font-size: 25px;'>Subject</th>
		<th style='font-size: 25px;'>Lab No.</th>
		<th style='font-size: 25px;'>Date and Time(yyyy-mm--dd hh:mm:ss)</th>
		
		</tr>";
		while($row = mysqli_fetch_assoc($result)) 
		{
			$n++;
			echo "<tr bgcolor='white'>";
			echo "<td style='font-size: 20px;top:50%;left:50%;text-align:center;'>" . $n. "</td> &nbsp";
			echo "<td style='font-size: 20px;top:50%;left:50%;text-align:center;'>" . $row['username'] . "</td> &nbsp";
			echo "<td style='font-size: 20px;top:50%;left:50%;text-align:center;'>" . $row['batch'] . "</td> &nbsp";
			echo "<td style='font-size: 20px;top:50%;left:50%;text-align:center;'>" . $row['subject'] . "</td> &nbsp";
			echo "<td style='font-size: 20px;top:50%;left:50%;text-align:center;'>" . $row['room'] . "</td> &nbsp";
			echo "<td style='font-size: 20px;top:50%;left:50%;text-align:center;'>" . $row['date_time'] . "</td> &nbsp";
			echo "</tr>";
			
		}
		echo "</table>";
		echo "<br/><br/>";
		echo "
		<table align='center' style='top:50%;left:50%;'>
		<tr style='background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);top:50%;left:50%;'>
		<th style='font-size: 25px;font-family: verdana;color:#327da8; text-align: center;'>Count: </th>";
		echo "<td style='font-size: 25px;font-family: verdana;color:#3A33FF; text-align: center;'>".mysqli_num_rows($result)."</td>";
		echo "</tr>";
		echo "</table>";
		echo "<br/><br/>";
		
		
	}
	}
	
	
}


?>

<h3   style="font-family: verdana; font-size:20px;color:#00fce3; text-align:center;">Sort By</h3>
<div style="text-align:center;">
<select name="select4" onchange="location = this.value;">
<option value="" selected>-Select-</option>
<optgroup label="Year wise">
 <option value="se1.php?a=<?php echo $username?>">SE Batch Records</option>
 <option value="te1.php?a=<?php echo $username?>">TE Batch Records</option>
 <option value="be1.php?a=<?php echo $username?>">BE Batch Records</option>
</optgroup>
 <option value="labwise.php?a=<?php echo $username?>" style="font-weight:bold;">Lab wise</option>
 <option value="useridwise1.php?a=<?php echo $username?>" style="font-weight:bold;">UserID wise</option>
</select>
</div>
<br><br><br><br><br><br>
<input style="background: #85e085;font-size: 24px;" type="button" value="Logout" onclick="window.location='https://homogenetic-gears.000webhostapp.com/faculty_login.html';"/>


