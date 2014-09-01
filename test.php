<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <ul>
  <?
        $connect=mysql_connect("us-cdbr-azure-east-a.cloudapp.net","b95a2f9e2a388a","99d6c567") or die("Unable to Connect");
        mysql_select_db("creativeschoolDB") or die("Could not open the db");
        $showtablequery="Select Department_Id, Department_Name FROM department";
        $query_result=mysql_query($showtablequery);
        while($showtablerow = mysql_fetch_array($query_result))
        {
        echo "<li>".$showtablerow[1]."</li>"; 
        } 
        ?>
		</ul>
 </body>
</html>