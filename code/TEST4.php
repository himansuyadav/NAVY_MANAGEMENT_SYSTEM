<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>service page</title>
  <link rel="stylesheet" href="warr.css">
  <link rel="stylesheet" href="TEST.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="header"></div>
  <input type="checkbox" id="opensidebarmenu">
  <label for="opensidebarmenu" class="sidebaricontoggle">
    <div class="spinner top"></div>
    <div class="spinner middle"></div>
    <div class="spinner bottom"></div>
  </label>
  <div id="slidebarmenu">
    <ul class="menu">
      <li><a href="./TEST.php">sea warrior</a></li>
      <li><a href="./TEST1.php">service</a></li>
      <li><a href="./TEST2.php">troops</a></li>
      <li><a href="./TEST3.php">operation</a></li>
      <li><a href="./TEST4.php">operation troop</a></li>
      <li><a href="TEST5.php">equipment</a></li>
      <li><a href="TEST6.php">operation equipment</a></li>
    </ul>
  </div>
  <div class="main">
    <h1>Detail form</h1>
  
    <img src="Navy.png" class="logo-icon">
    <h2 align="center">OPERATION TROOP</h2>

    <div class="container"> 
       

        <div class="title">
            operation TROOP detail
        </div>
        <form action="#" method="POST">
        <div class="form">

            <div class="input_field">
                <lable>operation name</lable>
          <input type="text" class="input" name="operation_name">
            </div>
     

            <div class="input_field">
                <lable>troop name</lable>
          <input type="text" class="input" name="troop_name">
            </div>


            <div class="input_field">
                <lable>status</lable>
          <input type="text" class="input" name="status">
            </div>

            <div class="input_field">
                <lable>operation date</lable>
          <input type="text" class="input" name="date">
            </div>
     
            

            <div class="input_field term">
                <label class="check">
                   <input type="checkbox">
                   <spam class="checkmark"></spam>
                </lable> 
                <p>agree to terms and condition</p>
            </div>

            <div class="input_field">
          <input type="submit"class="btn btn-primary btn-block" value="register" class="btn" name="register">
            </div>
        </div>  
        </form>
    </div>
  </div>
</body>
</html>

<?php
if($_POST['register'])
{
    $sid=$_POST['operation_name'];
    $name=$_POST['troop_name'];
    $yoj=$_POST['status'];
    $rank=$_POST['date'];
   
    $query="INSERT INTO operation_troop VALUES('$sid','$name','$yoj','$rank')";
    $data=mysqli_query($conn,$query);

    if($data)
    {
        echo "data inserted into database";
    }
    else{
        echo "failed";
    }
}
?>