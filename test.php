<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
  <?
        $connect=mysql_connect("us-cdbr-azure-east-a.cloudapp.net","b95a2f9e2a388a","99d6c567") or die("Unable to Connect");
        mysql_select_db("creativeschoolDB") or die("Could not open the db");
        $showtablequery="SHOW TABLES FROM creativeschoolDB";
        $query_result=mysql_query($showtablequery);
        while($showtablerow = mysql_fetch_array($query_result))
        {
        echo $showtablerow[0]." ";
        } 
        ?>
 </body>
</html>