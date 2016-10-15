<!DOCTYPE HTML>
<html>
<head>
  <title>Preliminary Information</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
  <body>
    <form action="action_page.php">
      Diagnosis Date:<br>
      <input type="text" name="ddate" value="MM/YYYY" class="input">
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
      
      <input type="submit" value="Submit">
      
      
      
    </form>
    
    
    
  

  </body>

</html>