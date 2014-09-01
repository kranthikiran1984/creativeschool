<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <ul>
  <?
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
		 
		   echo "<li>".$row['department_name']."</li>"; 
		}

		mysql_close($con);
	}
        ?>
		</ul>
 </body>
</html>