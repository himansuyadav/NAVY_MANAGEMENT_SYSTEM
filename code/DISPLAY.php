<?php
$servername ="localhost";
$username   ="root";
$password ="";
$dbname="navy_management_080";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    echo "connection ok";
}
else
{
    echo "connection failed".mysqli_connect_error();
}
$sql="SELECT * FROM sea_warrior"

$records=mysqli_query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>warrior details</title>
</head>

<body>
<table width="600" border="1" cellpadding="1" cellspacing="1">
    <tr>
        <th>warrior id<th> 
        <th>name<th> 
        <th>phone<th> 
        <th>email<th>
        <th>gender<th>
        <th>password<th>
    </tr> 

    <?php

    while($warri=mysqli_fetch_assoc($records))
    {
        echo "<tr>";

        
        echo "<td>".$warri['warrior_id'].</td>";
        echo "<td>".$warri['name'].</td>";
        echo "<td>".$warri['email'].</td>";
        echo "<td>".$warri['phone'].</td>";
        echo "<td>".$warri['gender'].</td>";
        echo "<td>".$warri['password'].</td>";


        echo "<tr>";
       
    }     
</body>
</html>


