<?php
	$conn = mysql_connect("localhost","root","Krushank");
	$db      = mysql_select_db("abc",$conn);
?>
 
<?php
 
	$name       =	  $_POST['user'];
	$company = 	  $_POST['comp'];
 
	# echo "My name is $name <br /> And I'm the CEO of my company {$company}"
 
	$sql     = "INSERT into bbc values('$name','$company')";
	$qury  = mysql_query($sql);
 
	if(!$qury)
		echo mysql_error();
	else
	{
		echo "Successfully Inserted<br />";
		echo "<a href='show.php'>View Result</a>";
	}
?>
