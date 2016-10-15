<!DOCTYPE HTML>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="icon" type="image/png" href="../resources/logo/logo.png"/>
</head>

  <body>
    <div id="main"></div>
    <div id="top">
      Conversations
    </div>
    <div id="profile">
      <form>
        <div id="center">Preferences</div><hr>
        <input type="text" name="zip" placeholder="60606" class="input">
        <input list="radius" name="radius" class="input" id="radiu1s">
      <datalist id="radius">
        <option value="<5 miles">
        <option value="5-10 miles">
        <option value="10+ miles">
      </datalist>Nearby
        <input type="checkbox" class="leftBox" >
        <hr>
        <div id="rrr">Survivor *
        <input type="checkbox" id="rightBox"></div>
        <hr>
        <div id="lll">
        Co-Survivor *
          
        <input type="checkbox" class="leftBox">
          <hr>
        <div id="rrr">Metastatic *
        <input type="checkbox" id="rightBox"></div>

        </div>
        <hr>
        Gender
      <br>
      <input list="gender1" name="gender1" class="input">
      <datalist id="gender1">
        <option value="Male">
        <option value="Female">
        <option value="Other">
      </datalist><br>
      Age Range
      <br>
      <input list="ageRange" name="ageRange" class="input">
      <datalist id="ageRange">
        <option value="13-18">
        <option value="19-25">
        <option value="26-45">
        <option value="45+">
          <option value="any">
      </datalist><br>
        <div class="center"><input type="button" value="Submit" id="submit" onclick="hideshow()"></div>
      </form>
    </div>
    <div id="matches">
      <div class="match">
        Megan|Survivor|Female|26-45<a href="../messager/index.php"><img src="../resources/icon/chaticon.png" width="65px"></a><br>
        <i>Favorite hobbies include painting </i>
        <hr>
      </div>
      <div class="match">
        Jacky|Survivor|Female|45+ <img src="../resources/icon/chaticon.png" width="65px"><br>
        <i>I enjoy biking and camping </i>
        <hr>
      </div>
      <div class="match">
        Kate|Co-Survivor|Female|18-25 <img src="../resources/icon/chaticon.png" width="65px"><br>
        <i>Prefer to stay indoors and read books</i>
        <hr>
      </div>
    </div>
    <div id="bot">
    <div class="buttons" id="left" onclick="location.href='../home/index.php';" style="cursor:pointer;">
      Profile
    </div>
      <div class="buttons" id="right" onclick="location.href='http://ww5.komen.org/BreastCancer/FactsForLife.html';" style="cursor:pointer;">
      Information
    </div>
    </div>
  </body>
  <script>
  function hideshow() {
    document.getElementById("profile").style.display="none";
    document.getElementById("matches").style.display="block";
  }
  </script>
</html>