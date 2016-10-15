<!DOCTYPE HTML>
<html>
<head>
  <title>User Information</title>
  <link rel="stylesheet" href="style.css">

</head>

  <body>
    <div><img src="../resources/logo/logo.png"></div>
    <div id="am">I am:</div>
    <br>
    <hr>
    <br>
    <a onclick="click1()"><div class="buttons" id="survivor">
      Survivor
    </div></a>
    <div class="buttons" id="co" onclick="click2()">
      Co-Survivor
    </div>
    <div class="buttons" id="living" onclick="click3()">
      Living with Metastatic Disease
    </div>
    <div id="submit">
      Submit
    </div>

  </body>
  <script>
    function click1() {
      document.getElementById("survivor").style.backgroundColor="#E877AF";
      document.getElementById("co").style.color="black";
      document.getElementById("survivor").style.color="white";
      document.getElementById("co").style.backgroundColor="white";
      document.getElementById("living").style.backgroundColor="white";
      document.getElementById("living").style.color="black";
      
    }
    function click2() {
      document.getElementById("survivor").style.backgroundColor="white";
      document.getElementById("survivor").style.color="black";
      document.getElementById("co").style.backgroundColor="#E877AF";
      document.getElementById("co").style.color="white";
      document.getElementById("living").style.backgroundColor="white";
      document.getElementById("living").style.color="black";
    }
    function click3() {
      document.getElementById("survivor").style.backgroundColor="white";
      document.getElementById("survivor").style.color="black";
      document.getElementById("co").style.color="black";
      document.getElementById("co").style.backgroundColor="white";
      document.getElementById("living").style.backgroundColor="#E877AF";
      document.getElementById("living").style.color="white";
    }
  </script>
</html>