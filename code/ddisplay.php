<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="ddisplay.css">
</head>

<body>

    <div class="col-lg-6 col-md-6 col-12">
        <div class="card">
            <div class="card-header text-center">
                <h1>warrior</h1>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table border="1px solid black">
                        <thead>
                            <th>warrior_id</th>
                            <th>name</th>
                             <th>email</th>
                            <th>phone</th>
                            <th>gender</th>
                            <th>password</th>
                        </thead>
                        <tbody>
                            <?php
                            
                            $selectQuery = "select * from sea_warrior";
                            $squery = mysqli_query($conn, $selectQuery);

                            while (($result = mysqli_fetch_assoc($squery))) {
                            ?>
                                <tr>
                                <td><?php echo $result['warrior_id']; ?></td>

                                    <td><?php echo $result['name'] ?></td>
                                    <td><?php echo $result['email']; ?></td>
                                    <td><?php echo $result['phone']; ?></td>
                                    <td><?php echo $result['gender']; ?></td>
                                    <td><?php echo $result['password']; ?></td>


                                </tr>
                            <?php
                            $n++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>