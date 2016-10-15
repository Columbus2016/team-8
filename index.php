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
        <source src="resources/video/WelcomeVideo.webm" type="video/webm">
        <source src="resources/video/WelcomeVideo.mp4" type="video/mp4">

      </video>
    </div>
    <a onclick="hideshow()"><div class="show" id="left">
      Register
      </div></a>
    <div class="show" id="right" onclick="location.href='../login/index.php';" style="cursor:pointer;">
      Login
    </div>
    <div id="hide">
      <form name="selection" action="passcode/index.php" method="post">
        <span id="spans">Register</span>
        <br>
        <hr>
        Name
        <br>
        <input type="text" name="fullname" placeholder="Name" class="input"><br>
        Phone
        <br><input type="text" name="phone" placeholder="(XXX)XXX-XXXX" class="input"><br>
        
        Email
        <br><input type="text" name="email" placeholder="Email" class="input"><br>
        Password
        <br><input type="password" name="password" placeholder="Password" class="input"><br>
        Confirm Password
        <br><input type="password" name="confirm" placeholder="Password" class="input"><br>
        <input type="submit" value="Submit" id="submitbtn">
      </form>
    </div>
  </body>
  <script>
    function hideshow(){
      document.getElementById("left").style.display="none";
      document.getElementById("right").style.display="none";
      document.getElementById("hide").style.display="block";
    } 
  </script>
</html>