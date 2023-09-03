<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>css slider</title>
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
      <li><a href="warr.html">sea warrior</a></li>
      <li><a href="#">service</a></li>
      <li><a href="#">troops</a></li>
      <li><a href="#">operation</a></li>
      <li><a href="#">operation troop</a></li>
      <li><a href="#">equipment</a></li>
      <li><a href="#">operation equipment</a></li>
    </ul>
  </div>
  <div class="main">
    <h1>Detail form</h1>
  
    <img src="Navy.png" class="logo-icon">
    <h2 align="center">registeration</h2>
    <div class="container"> 

        <div class="title">
            warrior detail
        </div>

        <div class="form">
          <form action="warrior.php" method="post">

            <div class="input_field">
                <lable>warrior_id</lable>
          <input type="text" class="input" name="warrior_id">
            </div>
     

            <div class="input_field">
                <lable>name</lable>
          <input type="text" class="input" name="name">
            </div>
     

        
            <div class="input_field">
                <lable>email</lable>
          <input type="email" class="input" name="email">
            </div>
    
        
        
            <div class="input_field">
                <lable>phone</lable>
          <input type="text" class="input" name="moble">
            </div>
     

            <div class="input_field">
                <lable>gender</lable>
                <div class="custom_select">
                <select  name="Gender">
                    <option>select</option>
                    <option value="M">male</option>
                    <option value="F">female</option>
                </select>
             </div>
            </div>
            
            
            <div class="input_field">
                <lable>passwd</lable>
          <input type="password" class="input" name="password">
            </div>

            <div class="input_field term">
                <label class="check">
                   <input type="checkbox">
                   <spam class="checkmark"></spam>
                </lable> 
                <p>agree to terms and condition</p>
            </div>

            <div class="input_field">
          <input type="submit"class="btn btn-primary btn-block" value="register" class="btn">
            </div>


</form>

        </div>  

    </div>
  </div>
</body>
</html>