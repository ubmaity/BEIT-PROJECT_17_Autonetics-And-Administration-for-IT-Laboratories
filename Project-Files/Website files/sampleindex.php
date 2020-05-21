
<!DOCTYPE html>
<head>
<script type = "text/javascript">  

function abc()
{
	alert("func activated");

var  ip =<?php $ip = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']); echo ($ip);?>;
if(ip=="10.101.1.142")
{
	document.getElementById("pcno").value="303_C003";	
}

else if(ip=="10.101.1.143")
{
	document.getElementById("pcno").value="303_C004";	
}

else if(ip=="10.101.1.144")
{
	document.getElementById("pcno").value="303_C005";	
}

else if(ip=="103.198.98.80")
{
	document.getElementById("pcno").value="Karthik_PC";	
}

}



function test(){

 var x = document.getElementById("labs").value;
 if(x==301)
 {
  document.getElementById("demo").innerHTML = "<h2 align=center style='background-color:#b3ffff;font-family: verdana;text-align:center;font-size:40px;color:#0044cc;'> Lab &nbsp Layout</h2> <img align='top' height='450' width='450' src='301.jpeg'/>";
 }
 else if(x==302)
 {
  document.getElementById("demo").innerHTML = "<h2 align=center style='background-color:#b3ffff;font-family: verdana;text-align:center;font-size:40px;color:#0044cc;'> Lab &nbsp Layout</h2> <img align='top' height='450' width='450' src='302.jpeg'/>";
 }
 else if(x==303)
 {
  document.getElementById("demo").innerHTML = "<h2 align=center style='background-color:#b3ffff;font-family: verdana;text-align:center;font-size:40px;color:#0044cc;'> Lab &nbsp Layout</h2> <img align='top' height='450' width='450' src='303.jpeg'/>";
 }
 //else if(x==308)
 //{
 // document.getElementById("demo").innerHTML = "<h2 align=center style='background-color:#b3ffff;font-family: verdana;text-align:center;font-size:40px;color:#0044cc;'> Lab &nbsp Layout</h2> <img align='top' height='450' width='450' src='308.jpeg'/>";
// }
 else if(x==309)
 {
  document.getElementById("demo").innerHTML = "<h2 align=center style='background-color:#b3ffff;font-family: verdana;text-align:center;font-size:40px;color:#0044cc;'> Lab &nbsp Layout</h2> <img align='top' height='450' width='450' src='309.jpeg'/>";
 }
 else if(x==313)
 {
  document.getElementById("demo").innerHTML = "<h2 align=center style='background-color:#b3ffff;font-family: verdana;text-align:center;font-size:40px;color:#0044cc;'> Lab &nbsp Layout</h2> <img align='top' height='450' width='450' src='313.jpeg'/>";
 }
 else if(x==317)
 {
  document.getElementById("demo").innerHTML = "<h2 align=center style='background-color:#b3ffff;font-family: verdana;text-align:center;font-size:40px;color:#0044cc;'> Lab &nbsp Layout</h2> <img align='top' height='450' width='450' src='317.jpeg'/>";
 }
 else if(x==405)
 {
  document.getElementById("demo").innerHTML = "<h2 align=center style='background-color:#b3ffff;font-family: verdana;text-align:center;font-size:40px;color:#0044cc;'> Lab &nbsp Layout</h2> <img align='top' height='450' width='450' src='405.jpeg'/>";
 }
 else if(x==406)
 {
  document.getElementById("demo").innerHTML = "<h2 align=center style='background-color:#b3ffff;font-family: verdana;text-align:center;font-size:40px;color:#0044cc;'> Lab &nbsp Layout</h2> <img align='top' height='450' width='450' src='406.jpeg'/>";
 }
}
	  
function validate(){

var username=document.form.username.value;
var password=document.form.password.value;
var batch=document.form.select1.value;
var subject=document.form.select2.value;
var room=document.form.select3.value;
var pcno=document.form.pcno.value;



if (username==null || username=="")
{  
  alert("Please enter ID");  
  return false;  
  
}

else if(password==null || password=="")
{  
  alert("Please enter Password");  
  return false;  
  }  
  
else if (batch==-1)
{  
  alert("Please enter Batch");  
  return false;  
}



else if (subject==-1)
{  
  alert("Please enter Subject");  
  return false;  
}

else if (room==-1)
{  
  alert("Please enter Lab No.");  
  return false;  
}

else if (pcno==""||pcno==null)
{  
  alert("Please click on """);  
  return false;  
}





 
}

      </script>      
   </head>

<body>
<h2 style="background-color:#b3ffff;font-family: verdana;text-align:center;font-size:40px;border-style: outset;color:#0044cc;"><b>APSIT  Lab  Utilization  Record </b></h2>

<div id="demo" style="position: relative;float: right;padding-right: 40px;padding-top: 320px;" ></div>
<link rel="stylesheet" type="text/css" href="login.css">
<div class="login-page">
  <div class="form">
  <img src="download.jpg" alt="abc" style="width:100px;height:100px;">
    <h3 style="font-family: verdana;">Welcome to APSIT</h3> 
	<br>
    <form name="form" class="container-login100" method="POST" action="https://homogenetic-gears.000webhostapp.com/check.php" onsubmit="return(validate());">
      
	  <table>
	  <tr>
	  <td style="font-family: verdana;font-weight:bold;color:#8800cc;">User ID</td>
	  <td><input type="text" name="username" placeholder="ID"/></td>
	  </tr>
	  <tr>
	  <td style="font-family: verdana;font-weight:bold;color:#8800cc;">Password</td>
      <td><input type="password" name="password" placeholder="Password"/></td>
	  </tr>
	  <tr>
	  <td style="font-family: verdana;font-weight:bold;color:#8800cc;">Batch</td>
	  <td height="50px"><select name="select1"> <option value="-1"> Select Batch  </option> <option value="B1"> B1 </option> <option value="B2"> B2 </option> <option value="B3"> B3 </option></select></td>
	  
	  </tr>
	  <tr>
	  <td style="font-family: verdana;font-weight:bold;color:#8800cc;">Subject</td>
	  <td height="80px"><select name="select2"> <option value="-1"> Select Subject  </option> <option value="NDL"> NDL </option> <option value="ASL"> ASL </option> <option value="ISL"> ISL </option> <option value="AL"> AL </option><option value="Absence due work"> Absence due work </option><option value="Project work"> Project work </option><option value="other"> Other </option></select></td>
	  </tr>
	 
	 <tr>
	   <td></td>
	   <td><input type="text" name="pcno" value="<?php $ip = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']); echo ($ip);
if($ip=='10.101.1.142')
{
	echo '303_C003';	
}

else if($ip=='10.101.1.14')
{
	echo '303_C004';
}

else if($ip=='10.101.1.144')
{
	echo '303_C005';
}

                                            
?>" readonly /></td>
	   </tr>
	 
	 
	  <tr>
	   <td style="font-family: verdana;font-weight:bold;color:#8800cc;">Lab No.</td>
	   <td><select id="labs" name="select3" onchange="test()"> <option value="-1"> Select Lab No. </option> <option value="301"> 301 </option> <option value="302"> 302 </option> <option value="303"> 303 </option><option value="308"> 308 </option> <option value="309"> 309 </option><option value="313"> 313 </option><option value="317"> 317 </option><option value="405"> 405 </option><option value="406"> 406 </option></select></td>
	   <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	   </tr>
	   
	   

	   
	   
	  </table><br><br> 
      <input style="text-weight:bold;color:#F3FF33;background: linear-gradient(to bottom, rgba(82,168,255,1) 0%, rgba(64,106,231,1) 100%);border-radius: 50px;" type="submit" value="Login"/>
    </form>
	<br>
	<a href="https://homogenetic-gears.000webhostapp.com/admin_login.html" style="font-family: verdana;display: block;border-style: solid;text-decoration:none"><b>Admin Login</b></a> &nbsp &nbsp &nbsp  <a href="https://homogenetic-gears.000webhostapp.com/faculty_login.html" style="font-family: verdana;display: block;border-style: solid;text-decoration:none"><b>Faculty Login</b></a>
	<br><br>
	<h3   style="font-family: verdana; font-size:13px;">Any issues/queries? &nbsp<a href="https://docs.google.com/forms/d/e/1FAIpQLSeor5oCOZBVX8_2mnWNd7PESNJSNRn_cK5gLGbrLJyjuEE6Mw/viewform" style="font-family: verdana;font-size:13px;color:blue;">Click here</a></h3>
	
	
  </div><br><br><br>


</body>


</html>
