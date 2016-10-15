<!DOCTYPE HTML>
<html>
<head>
  <title>Preliminary Information</title>
  <link rel="stylesheet" href="style.css">

</head>

  <body>
    <form action="action_page.php">
      Diagnosis Date:<br>
      <input type="text" name="ddate" value="MM/YYYY">
      <br>
      Cancer Type
      <br>
      
      
      <input list="types" name="types">
      <datalist id="types">
        <option value="Noninvasive (in situ) breast cancer">
        <option value="Invasive (infiltrating) breast cancer">
        <option value="Invasive ductal carcinoma (IDC)">
        <option value="Invasive lobular carcinoma (ILC)">
        <option value="Ductal carcinoma in situ (DCIS)">
        <option value="Invasive ductal carcinoma (IDC)">
        <option value="Lobular carcinoma in situ (LCIS)">
        <option value="Invasive lobular carcinoma (ILC)">
        <option value="Inflammatory breast cancer">
        <option value="Metastatic breast cancer">
      </datalist><br>
      
      <input type="submit" value="Submit">
      
      
      
    </form>
    
    
    
  

  </body>

</html>