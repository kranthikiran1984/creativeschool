<html>
<head>
<title>Departments</title>
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
  <?
        $connect=mysql_connect("us-cdbr-azure-east-a.cloudapp.net","b95a2f9e2a388a","99d6c567") or die("Unable to Connect");
        mysql_select_db("creativeschoolDB") or die("Could not open the db");
        $showtablequery="Select Department_Id, Department_Name FROM department";
        $query_result=mysql_query($showtablequery);
        while($showtablerow = mysql_fetch_array($query_result))
        {
        echo "<li>".$showtablerow["Department_Name"]."</li>"; 
        } 
        ?>
		</ul><br/>
select the department and click on Go button.
    <select name="depList" id="depList">
		<?
        $connect=mysql_connect("us-cdbr-azure-east-a.cloudapp.net","b95a2f9e2a388a","99d6c567") or die("Unable to Connect");
        mysql_select_db("creativeschoolDB") or die("Could not open the db");
        $showtablequery="Select Department_Id, Department_Name FROM department";
        $query_result=mysql_query($showtablequery);
        while($showtablerow = mysql_fetch_array($query_result))
        {
        echo "<option value='".$row["Department_Page"]."'>" . $row["Department_Name"] . "</option>";
        } 
        ?>      
    </select>

<input type="button" value="Go" onclick="MoveToDept()" />

</div>
</div>
<div align="center">
 

COPYRIGHT © 2014 - ALL RIGHTS RESERVED
</div>

</body>
</html>