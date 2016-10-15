<!DOCTYPE HTML>
<html>
<head>
  <title>Welcome</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
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
    <div class="show" id="right">
      Login
    </div>
    <div id="hide">
      <div>
        sign-up
      </div>
      <form>
      <!-- This is where you guys to php
        Name
        age range
        email
        password
        confirm
        Gender
      -->
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