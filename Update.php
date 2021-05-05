<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli("localhost","root","");
if($conn->connect_error)
{
die("Unable to connect"$conn->(connect_error))
}
$sql="UPDATE MyDB set Age='19' where Name='Agnes'";
if($conn->query($sql)==TRUE)
{
echo "The update has been made";
}
else
{
echo "No update has been made";
}
$result=$conn->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
echo "Result has been displayed";
}
else
{
echo "0 Results";
}
}
$conn->close();
?>