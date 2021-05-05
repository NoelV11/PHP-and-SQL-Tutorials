<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli("localhost","root","");

if($conn->connect_error)
{
echo "Database is connected";
}
else
{
echo "Database is not connected";
}
$sql="SELECT Name,Age from MyDB where Age='17'";
$result=$conn->query($sql);
if($result-> num_rows>0)
{
while($rows=$result->fetch_assoc())
{
echo $row["First Name"]."First Name is".$row["Age"]."The age is";
}
else
{
echo "0 Results";
}
}
if($conn->query($sql)==TRUE)
{
echo "Result has been displayed";
}
else
{
echo "No Results";
}
$conn->close();
?>