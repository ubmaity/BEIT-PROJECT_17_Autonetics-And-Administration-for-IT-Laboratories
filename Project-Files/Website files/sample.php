<html>
<head>
<script>
function showData(str) {
function show(str) {
    if (str == "") { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
		
        xmlhttp.open("GET","getdata.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<form>
<select name="users" onchange="showData(this.value)">
  <option value="">Select a Sorting type:</option>
  <option value="batch">Batch Wise</option>
  <option value="username">UserID Wise</option>
  <option value="room">Lab Wise</option>
  <option value="18101003">ID</option>
  </select>
</form>
<br>
<div id="txtHint"><b>Results will be listed here...</b></div>

</body>
<input style="background: #33FFCE;font-size: 24px;text-align: center; position: absolute;top: 90%;left:80%;" type="button" value="Go Back" onclick="window.location='https://homogenetic-gears.000webhostapp.com/login.html';"/>
</html>