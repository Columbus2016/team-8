<!DOCTYPE HTML>
<html>
<head>
  <title>Welcome</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="icon" type="image/png" href="../resources/logo/logo.png"/>
</head>
  <body>
    <div class="fullscreen-bg">
      <video loop muted autoplay poster="resources/video/WelcomeVideo.JPG" class="fullscreen-bg__video">
        <source src="../resources/video/WelcomeVideo.webm" type="video/webm">
        <source src="../resources/video/WelcomeVideo.mp4" type="video/mp4">

      </video>
    </div>
    <a href="../home/index.php"><div class="show" id="left">
      Login
      </div></a>
  
    <div id="hide">
      <form name="selection" action="selection/index.php" method="post">
        
        Email
        <br><input type="text" name="email" placeholder="Email" class="input"><br>
        Password
        <br><input type="password" name="password" placeholder="Password" class="input"><br>
        <p id="small">reset password</p>
        
      </form>
    </div>
  </body>
</html>