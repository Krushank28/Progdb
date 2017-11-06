<?php

$con=mysqli_connect("localhost","root","Krushank");
print " connection created";
if(!$con)
{
die('couldnot'.mysqli_connect_error());
}
if(mysqli_query($con,"CREATE DATABASE designprob5"))
{
echo " database created";
}
else
{
echo "error".mysqli_connect_error();
}
mysqli_select_db($con,"designprob5");
$sql="create table student(stuname varchar(15),age int)";
echo " table created successfully";
mysqli_query($con,$sql);
?>
