<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type = "text/javascript"  src = "jquery-3.2.1.js"></script>   
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Twitter - Home</title>
</head>
<body style="background-image: url('slike/twitter-bg.jpg'); background-repeat:no-repeat; background-size: cover;">
<nav>
    <div class="nav-wrapper light-blue">
      <a href="#" class="brand-logo left"><img src="slike/twitter-logo-white.png" style="margin:2px" width="70px" height="60px" alt="Logo"></a>
      <a href="#" class="brand-logo center">Home Page</a>
      <ul id="nav-mobile" class="right">
        <li><a id="logout" type="submit">Log out</a></li>
        <script>
          $('#logout').on('click', function(){

          alert("Are you sure you want to log out?")
          window.location.href = 'index.php';

          }); 
        </script>
      </ul>
    </div> 
</nav>

<div class="container" style="background-color:white; margin-top:40px">
  <div class="container center" style="text-align: center;">
        <div class="row" style="text-align: center;">
              <div class="input-field col s12">
                <input placeholder="Tell us what are you thinking about..." id="tweet" type="text">
                <label for="tweet"></label>
              </div>
              <a href="#!" id="tweetSubmit" style="background-color:#42a5f5; border-radius: 25px; margin-bottom:10px; padding-right:50px;padding-left:50px" class="waves-effect waves-light btn">Tweet</a>
          </div>
  </div>
</div>


<script src="functions.js"></script>
    
</body>
</html>