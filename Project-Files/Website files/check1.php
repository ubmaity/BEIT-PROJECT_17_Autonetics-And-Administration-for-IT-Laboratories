<link rel="stylesheet" type="text/css" href="loginv1.css">
<h3   style="font-family: verdana; font-size:30px;color:#00fce3;text-align: center;">Lab Session Records</h3>
<input style="background: #85e085;font-size: 24px;" type="button" value="Logout" onclick="window.location='https://homogenetic-gears.000webhostapp.com/admin_login.html';"/>


<?php
$n=0;
//error_reporting(0);
$user = 'id10740292_root';
$pass = $_POST["pass"];
$pass=strval($pass);
$db='id10740292_sample';
$con=mysqli_connect('localhost',$user,$pass,$db) or die("<script type='text/javascript'>alert('Invalid Credentials,please go back and enter VALID CREDENTIALS');</script>");
if($con)
{	
	?>
	
	
	
	
	
	<h3   style="font-family: verdana; font-size:20px;color:#00fce3; text-align:center;">Sort By</h3>
<div style="text-align:center;">
<select name="select4" onchange="location = this.value;">
<option value="" selected>-Select-</option>
<optgroup label="Year wise">
 <option value="se.php">SE Batch Records</option>
 <option value="te.php">TE Batch Records</option>
 <option value="be.php">BE Batch Records</option>
</optgroup>
 <option value="labwise.html" style="font-weight:bold;">Lab wise</option>
 <option value="useridwise.php" style="font-weight:bold;">UserID wise</option>
</select>
</div>
<br><br>
	
	
	
	
	
	
	
	<?php
	$query = "SELECT username,batch,subject,room,date_time FROM id10740292_root";
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

?>

<h3   style="font-family: verdana; font-size:20px;color:#00fce3; text-align:center;">Sort By</h3>
<div style="text-align:center;">
<select name="select4" onchange="location = this.value;">
<option value="" selected>-Select-</option>
<optgroup label="Year wise">
 <option value="se.php">SE Batch Records</option>
 <option value="te.php">TE Batch Records</option>
 <option value="be.php">BE Batch Records</option>
</optgroup>
 <option value="labwise.html" style="font-weight:bold;">Lab wise</option>
 <option value="useridwise.php" style="font-weight:bold;">UserID wise</option>
</select>
</div>
<br><br><br>
<input style="background: #85e085;font-size: 24px;" type="button" value="Logout" onclick="window.location='https://homogenetic-gears.000webhostapp.com/admin_login.html';"/>


