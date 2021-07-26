 <?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "eauganda";
 //$conn = mysql_connect($dbhost, $dbuser, $dbpass,$db);
   //

 $con = mysql_connect($dbhost, $dbuser, $dbpass,$db);
 mysql_select_db($db,$con);
?>

