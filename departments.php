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
        SetAllDepartmentsInList();
        ?>
</ul><br/>
select the department and click on Go button.
    <select name="depList" id="depList">
        
        <?php 

            SetAllDepartments();
    ?>
    </select>

<input type="button" value="Go" onclick="MoveToDept()" />

</div>
</div>
<div align="center">
 

COPYRIGHT © 2014 - ALL RIGHTS RESERVED
</div>
<?php

function SetAllCourses()
{
	$user="b95a2f9e2a388a";
	$password="99d6c567";
	$database="creativeschoolDB";
	$server = "us-cdbr-azure-east-a.cloudapp.net";

	$con= mysql_connect($server,$user,$password);

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysql_connect_error();
	}
	else
	{
		@mysql_select_db($con, $database) or die("Unable to select database");

		$query="Select Course_Id, Course_Name FROM course";

		mysql_query($con, $query);

		mysql_close($con);
	}
}


function SetAllDepartmentsInDropDown()
{
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
		mysql_select_db($con, $database) or die("Unable to select database");

		$query="Select Department_Id, Department_Name FROM department";

		$result = mysql_query($con, $query);

		while($row = mysql_fetch_assoc($result)) {
		 
		   echo '<option value="'.$row["department_page"].'">' . $row["department_name"] . '</option>';
		}

		mysql_close($con);
	}
}

function SetAllDepartmentsInList()
{
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
		mysql_select_db($con, $database) or die("Unable to select database");

		$query="Select Department_Id, Department_Name FROM department";

		$result = mysql_query($con, $query);

		while($row = mysql_fetch_assoc($result)) {
		 
		   echo '<li>'.$row["department_name"].'</li>'; 
		}

		mysql_close($con);
	}
}
    function SetCoursesofferedByDepartment($dpt_Id)
{
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
		mysql_select_db($con, $database) or die("Unable to select database");

		$query="Select course_Id, course_Name FROM course c, reldepartment_course rc WHERE rc.course_Id=c.course_id AND rc.department_Id="+$dept_Id;

		mysql_query($con, $query);

		mysql_close($con);
	}
}

?>
</body>
</html>