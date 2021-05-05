<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli("localhost","root","");
if($conn->connect_error)
{
echo "Connected Succesfuly";
}
else
{
echo "Not connected".$conn->connect_error;
}
if($conn->query($sql)==TRUE)
{
echo "Database is connected";
}
else
{
echo "Database is not connected";
}
$sql="CREATE DATABASE MyDB(
Name char(30),
Age int(5),
Class char(5)
);";
if($conn->query($sql)==TRUE)
{
echo "Table has been created";
}
else
{
echo "Table is not created";
}
$conn->close();
?>