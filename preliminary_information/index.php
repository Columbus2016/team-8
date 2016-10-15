<!DOCTYPE HTML>
<html>
<head>
  <title>Preliminary Information</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
  <body>
    <div id="logo"><img src="../resources/logo/logo.png"></div>
    <form action="action_page.php" id="attributes">
      Diagnosis Date:<br>
      <input type="text" name="ddate" placeholder="MM/YYYY" class="input">
      <br>
      Cancer Type
      <br>
      <input list="types" name="types" class="input">
      <datalist id="types">
        <option value="Triple Negative Breast Cancer">
        <option value="HER2-positive breast cancer">
        <option value="Inflammatory Breast Cancer">
        <option value="Metastatic Breast Cancer">
      </datalist><br>
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
      </datalist><br>
      
      <input type="submit" value="Submit" id="submit">
      
    
    </form>
    
    
    
  

  </body>

</html>