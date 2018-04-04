<html>
<head>
<title>LIST</title>
</head>
<body>
<form action="cse.php" method="post">
<div style="background-color:  #d0ece7  ;width:100%;height:20%;">
<font color="#34495e">
</br>
<h1> LIST OF ONLINE EXAM SYSTEM</h1>
</div>
<p>
<?php 
session_start();

echo "Welcome:".$_SESSION["name"];
?>
</p>
<div style="background-color: #a2d9ce ;width: 100%;height:50%;">
<center>

</br>
COMPUTER SCIENCE :  25marks
</br>
</br>
</br>
GENERAL KNOWLEDGE:  25marks
  </br>
  </br>
  </br>
 ENGLISH        :  25marks
  </br>
  </br>
  </br>
  REASONING      :  25marks
  </br>
  </br>
  </br>
 APTITUDE       :  25marks
  </br>
  </br>
 </center>
 <div align="center">
 <input type="submit" name="start" value="start">
</div>
</div>

<div style="background-color: #d0ece7 ;width:100%;height:25%;">
</br>
<p><h3>***NO ABILITY TO RETURN TO A SECTION AFTER LEAVING IT: Test takers need to answer the questions of each section within the allotted section time. Once the test taker completes a section, whether the test taker selects to move to the next section or if time runs out, the test taker will not be able to return to that section.</h3></p>
 
</div>
</form>
</body>
</html>  

