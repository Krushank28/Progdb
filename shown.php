<?php
	$conn = mysql_connect("localhost","root","Krushank");
	$db      = mysql_select_db("abc",$conn);
?>
 
<?php
 
	echo "<ul>";
	$sql = "select * from bbc";
 
	$qury = mysql_query($sql);
 
	while($row = mysql_fetch_array($qury))
		echo "<li>Name: $row[0]</li><li>Company: $row[1]</li><br />";
 
	echo "</ul>";
 
?>
