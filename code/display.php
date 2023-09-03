<!-- <?php include("connection.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body style="margin: 50px;">
    <h1>list of sea warrior</h1>
    <br>
    <table>
        <thead>
            <tr>
                <th>warrior_id</th>
                <th>name</th>
                <th>phone</th>
                <th>email</th>
                <th>gender</th>
                <th>password</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername ="localhost";
            $username   ="root";
            $password ="";
            $dbname="navy_management_080";
            
            $conn = mysqli_connect($servername,$username,$password,$dbname);
            
            if($conn)
            {
                $sql ="SELECT * FROM sea_warrior";
            $result=mysqli_query($conn,$sql);
            echo"<table>";
                while($row =$result->fetch_assoc(SQLITE3_ASSOC))
           {
            
            echo "<tr>";

        
        echo "<td>$row['warrior_id']</td>";
        echo "<td>$row['name']</td>";
        echo "<td>$row['email']</td>";
        echo "<td>$row['phone']</td>";
        echo "<td>$row['gender']</td>";
        echo "<td>$row['password']</td>";


        echo "</tr>";
        
           }
        echo"</table>";
            }
            else
            {
                echo "connection failed".mysqli_connect_error();
            }
            
                ?>
        </tbody>
    </table>
        

</body>
</html> -->
