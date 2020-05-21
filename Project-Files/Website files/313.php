<link rel="stylesheet" type="text/css" href="loginv1.css">
<?php
//error_reporting(0);
$n=0;
$user = 'id10740292_root';
$pass='123456';
$db='id10740292_sample';
$con=mysqli_connect('localhost',$user,$pass,$db) or die(mysqli_error());
if($con)
{	
	echo "<h3   style='font-family: verdana; font-size:30px;color:#88FF33;border-style: outset;text-align: center;'>313 Lab Records</h3>";
	$query = "SELECT batch,username,subject,room,date_time FROM id10740292_root WHERE room='313' ORDER BY room ASC";
	$result = mysqli_query($con,$query);
	if(mysqli_num_rows($result) == 0)
	{
		echo "<h2 style='font-size: 18px;text-align: center;'>No entries found currently</h2>";
	}
	else if(mysqli_num_rows($result) > 0)
	{
		$n=0;
		echo "
		<table align='center' style='top:50%;left:50%;'>
		<tr style='background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);top:50%;left:50%;'>
		<th style='font-size: 25px;'>Sr No.</th>
		<th style='font-size: 25px;'>Lab No.</th>
		<th style='font-size: 25px;'>Batch</th>
		<th style='font-size: 25px;'>Username</th>
		<th style='font-size: 25px;'>Subject</th>
		<th style='font-size: 25px;'>Date and Time(yyyy-mm--dd hh:mm:ss)</th>
		
		</tr>";
		while($row = mysqli_fetch_assoc($result)) 
		{
			$n++;
			echo "<tr bgcolor='white'>";
			echo "<td style='font-size: 20px;top:50%;left:50%;text-align:center;'>" . $n. "</td> &nbsp";
			echo "<td style='font-size: 20px;top:50%;left:50%;text-align:center;'>" . $row['room'] . "</td> &nbsp";
			echo "<td style='font-size: 20px;top:50%;left:50%;text-align:center;'>" . $row['batch'] . "</td> &nbsp";
			echo "<td style='font-size: 20px;top:50%;left:50%;text-align:center;'>" . $row['username'] . "</td> &nbsp";
			echo "<td style='font-size: 20px;top:50%;left:50%;text-align:center;'>" . $row['subject'] . "</td> &nbsp";
			echo "<td style='font-size: 20px;top:50%;left:50%;text-align:center;'>" . $row['date_time'] . "</td> &nbsp";
			
			echo "</tr>";
		}
		echo "</table>";
		echo "<br/><br/><br/>";
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
	