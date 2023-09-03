<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>troop page</title>
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
      <li><a href="./TEST5.php">equipment</a></li>
      <li><a href="./TEST6.php">operation equipment</a></li>
    </ul>
  </div>
  <div class="main">
    <h1>Detail form</h1>
  
    <img src="Navy.png" class="logo-icon">
    <h2 align="center">forming troop</h2>

    <div class="container"> 
       

        <div class="title">
            troop detail
        </div>
        <form action="#" method="POST">
        <div class="form">

            <div class="input_field">
                <lable>troop id</lable>
          <input type="text" class="input" name="troop_id">
            </div>
     

            <div class="input_field">
                <lable> troop name</lable>
          <input type="text" class="input" name="troop_name">
            </div>

     
     
            <div class="input_field">
                <lable>stationed at</lable>
                <div class="custom_select">
                <select  name="station">
                    <option value="not selected">select</option>
                    <option value="chennai">chennai</option>
                    <option value="vishakapatnam">vishakapatnam</option>
                    <option value="mangalore">mangalore</option>
                    <option value="andaman">andaman</option>
                </select>
             </div>
            </div>

            <div class="input_field">
                <lable> warrior id</lable>
          <input type="text" class="input" name="warrior_id">
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
    $tid=$_POST['troop_id'];
    $name=$_POST['troop_name'];
    $station=$_POST['station'];
    $warrior_id=$_POST['warrior_id'];
   
    $query="INSERT INTO troop VALUES('$tid','$name','$station','$warrior_id')";
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