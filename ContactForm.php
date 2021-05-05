<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli('localhost','root','','db_contact');
$Name=$_POST('Name');
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];
$Message=$_POST['Message'];
$sql="INSERT INTO 'CONTACTTABLE'('Name','Email,'Phone','Message') VALUES('Noel',noeljjffifi,'1234556666','Message')";
$rs=mysqli_query($conn,$sql);
if($rs)
{
echo "Contact Data Inserted";
}