<!DOCTYPE HTML>
<html>
<head>
  <title>Welcome</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="icon" type="image/png" href="../resources/logo/logo.png"/>
</head>
  <body>
    <div id="header">Megan</div>
    <div id="chatbox">
    <div class="test" id="m1">Hey, Megan how was your appointment today?</div>
      <div class="test1" id="m2">Good! Everything has been going much better lately.</div>
      <div class="test" id="m3">Im glad to hear that Megan!</div>
      <div class="test1" id="m4">Me too. So glad that I was able to meet someone like you.</div>
      
    </div>
    <div id="textfield" onclick="show()"><input type="text" placeholder="..." id="inp">
     <img src="../resources/icon/sendicon.png" width="80px"></div>
  </body>
  <script>

    function show() {

        document.getElementById("m1").display="block";

    }
  </script>
</html>