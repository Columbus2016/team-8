<!DOCTYPE HTML>
<html>
<head>
  <title>User Information</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="icon" type="image/png" href="../resources/logo/logo.png"/>
</head>
  <body>
    <div><img src="../resources/logo/logo.png"></div>

    <hr>

    <a onclick="click1()"><div class="buttons" id="survivor">
      Survivor
    </div></a>
    <div class="buttons" id="co" onclick="click2()">
      Co-Survivor
    </div>
    <div class="buttons" id="living" onclick="click3()">
      Living with Metastatic Disease
    </div>
    <div id="submit" onclick="location.href='../preliminary_information/index.php';" style="cursor:pointer;">
      Submit
    </div>
<?php

		// Address error handling

		ini_set('display_errors',1);
		error_reporting(E_ALL & ~E_NOTICE);

		//Attempt to Connect

		if ($connection = @mysql_connect('localhost', 'root', 'password')){
			//print '<p>Successfully connected to MySQL.</p>';
			
		}
		else {
			die('<p>Could not connect to MySQL because: <b>' .mysql_error() .
			'</b></p>');
		}
		if (@mysql_select_db("CodeForGood8", $connection)){
			//print '<p>The CodeForGood8 database has been selected.</p>';
		}
		else {
			die('<p>Could not select the CodeForGood8 database because: <b>' .mysql_error().'</b></p>');
		}



	  $fullname=$_POST['fullname'];
	  $email=$_POST['email'];
	  $password=$_POST['password'];	
	  $selection = null;	  
	  $age_group = null;
	  $gender = null;
	  $zip = null;
	  $date = null;
	  $type = null;
	  $share = null;
	  
	  	$q = "SELECT EMAIL FROM Users WHERE EMAIL='$email'";
		$check = mysql_query($q);
		
		if( mysql_affected_rows() == 0){
			$sql="INSERT INTO Users(EMAIL, PASSWORD, NAME, AGE_GROUP, GENDER, ZIP, DDATE, TYPE, SHARE, SELECTION)VALUES('$email', '$password', '$fullname', '$age_group', '$gender', '$zip', '$date', '$type', '$share', '$selection')";
			$result=mysql_query($sql) or die(mysql_error());

			// if successfully insert data into database, displays message "Successful". 
			if($result){
				//print "<br />GOOD<br />";
			}
			else {
				print "<br />ERROR 1<br />";
			}
		}
		else{
			print "<br />ERROR 2<br />";
		}
				
		  	  
?>

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