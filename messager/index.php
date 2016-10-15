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
    <div id="chatbox"></div>
    <div id="textfield"><div onclick="create()"><input type="text" placeholder="..." id="inp" ><img src="../resources/icon/sendicon.png" width="90px"></div></div>
  </body>
  <script>
  function create() {
    var msg = document.getElementById("inp").value;
    document.getElementById("chatbox").innerHTML += "<div class=\"outer\"><div class=\"test\">"+ msg+"</div></div><br>";
    document.getElementById("inp").value = "";
  }
    function create1() {
      var msg = document.getElementById("inp").value;
      var elm = document.getElementById("chatbox");
      var newElement = document.createElement('div');
      newElement.setAttribute("class", "test");
      newElement.textContent= msg;
      elm.appendChild(newElement);
      document.getElementById("inp").value = "";

    }
    document.getElementById('inp').onkeypress = function(e) {
    if(e.keyCode == 13) {
      var msg = document.getElementById("inp").value;
    document.getElementById("chatbox").innerHTML += "<div class=\"outer\"><div class=\"test\">"+ msg+"</div></div><br>";
    document.getElementById("inp").value = "";
    }
}
  </script>
</html>