<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<script src="departments.js"></script>


</head>
<body  >

<ul class="sidebar"   >
  <li><a href="index.html">Home page</a>
  <li><a href="contactus.html">contact us</a>
  <li><a href="departments.php">Departments</a>
  <li><a href="gallery.html">Gallery</a>
</ul>


<div class="divcontent">
<h1>Engineering College OF Institute and Science</h1>

</div>
<div class="divdata" >
<div  style="margin-left: 250px;word-wrap:break-word;">

The Academic Programmes of the ECIS Khammam began in 2003 with the B. Tech. programme in three departments – Computer Science and Engineering, Electronics and Communication Engineering<BR>

<ul>
    <?php 
        $user="b95a2f9e2a388a";
	$password="99d6c567";
	$database="creativeschoolDB";
	$server = "us-cdbr-azure-east-a.cloudapp.net";

	$con= mysql_connect($server,$user,$password);

	// Check connection
	if (mysql_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysql_connect_error();
	}
	else
	{
		mysql_select_db($database) or die("Unable to select database");

		$query="Select Department_Id, Department_Name FROM department";

		$result = mysql_query($query);

		while($row = mysql_fetch_array($result)) {
		 
		   echo "<li>".$row["Department_Name"]."</li>"; 
		}

		mysql_close($con);
	}
        ?>
</ul><br/>
select the department and click on Go button.
    <select name="depList" id="depList">
        
    </select>

<input type="button" value="Go" onclick="MoveToDept()" />

</div>
</div>
<div align="center">
 

COPYRIGHT © 2014 - ALL RIGHTS RESERVED
</div>

</body>
</html>