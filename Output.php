    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $conn->mysqli("localhost","root","");
    if($conn->connect_error)
    {
    echo("Connection failed".$conn->connect_error);
    }
    else
    {
    echo("Connection succesful");
    }
    <!-- Add a database -->
    $sql="CREATE DATABASE MyDB";
    if($conn->query(sql)==TRUE)
    {
    echo "Database created succesfully";
    }
    else
    {
    echo "Database not created" .$conn->error;
    }
    $conn->close();
    $result=$conn->query($sql);
    if($result->num_rows>0)
    while($row=$result->fetch_assoc())
    {
    echo "id". $row["Name"]."Name is".$row["Age"]."Age is";
    }
    else
    {
    echo "0 results";
    }
    ?>
    
    