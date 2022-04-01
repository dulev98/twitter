
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
    <title>Twitter</title>
</head>
<body style="background-image: url('slike/twitter-bg.jpg'); background-repeat:no-repeat; background-size: cover;">
<nav>
    <div class="nav-wrapper light-blue">
      <a href="#" class="brand-logo left"><img src="slike/twitter-logo-white.png" style="margin:2px" width="70px" height="60px" alt="Logo"></a>
      <a href="#" class="brand-logo center">Welcome to twitter</a>
      <ul id="nav-mobile" class="right">
        <li><a class="modal-trigger" data-target="loginModal">Log in</a></li>
        <li><a href="index.php" data-target="register" type="submit">Register</a></li>
      </ul>
    </div>
</nav>

<div class="container">
    <div class="container" style="background-color:white; border-radius: 25px">
        <h4 class="center"style="padding:10px">Register now</h4>
        <br>
        <div class="row">
            <div class="input-field col s6">
            <input placeholder="Enter your name" id="first_name" type="text" class="validate">
            <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6 ">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Last Name</label>
            </div>
            <div class="input-field col s12">
            <input id="user_name" type="text" class="validate">
            <label for="user_name">Username</label>
            </div>
            <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
            <span class="helper-text" data-error="Please enter valid e-mail"></span>
            </div>
            <div class="input-field col s12">
            <input id="password" type="password" class="validate">
            <label for="password">Password</label>
            </div>

            <div style="margin:20px; float:right">
              <a href="" style="margin:10px" >Cancel</a>
              <a href="#" style="margin:10px" id="registerConfirm" >Confirm</a>
            </div>
        </div>

    </div>
</div>

<div id="loginModal" class="modal">
    <div class="modal-content">
      <h4 class="center">Log in</h4>
      <div class="row">
            <div class="input-field col s12">
              <input id="login_user_name" type="text" class="validate">
              <label for="login_user_name">Username</label>
            </div>
            <div class="input-field col s12">
              <input id="login_password" type="password" class="validate">
              <label for="login_password">Password</label>
            </div>

      </div>
      
    </div>
    <div class="modal-footer" style= "text-align: center">
      <a href="#!" id="loginUser" style="background-color:#42a5f5; border-radius: 25px; padding-right:50px;padding-left:50px" class="waves-effect waves-light btn">Log in</a>
    </div>
  </div>


<footer class="page-footer blue">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Twitter</h5>
                <p class="grey-text text-lighten-4">Tweet your day.</p>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Twitter.inc
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
  



  <script src="functions.js"></script>
    
</body>
</html>