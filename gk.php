<html>
<head>
<title>GK</title>
</head>
<body>
<form  method="post">
<div style="background-color: #fef9e7   ;width:100%;height:20%;">
<font color="#34495e">
</br>
<h1>GENRAL KNOWLEDGE EXAMINATION</h1>
</div>
<p>
<?php 
session_start();

echo "Welcome:".$_SESSION["name"];
?>
</p>

<div style="background-color:  #fad7a0   ;width:100%;height:60%;">
<div align="right">
<h3>(5*5=25)</h3>
</div>

1.  The Battle of Plassey was fought in  
<input type="radio" name="c1" value="1757">1757
<input type="radio" name="c1" value="1782">1782
<input type="radio" name="c1  " value="1748">1748
<input type="radio" name="c1 " value="1764">1764
</br>
</br>
</br>
2. 	Grand Central Terminal, Park Avenue, New York is the world's
<input type="radio" name="c2"value=" 	largest railway station"> 	largest railway station
<input type="radio" name="c2"value="highest railway station">highest railway station
<input type="radio" name="c2"value="longest railway station">longest railway station
<input type="radio" name="c2"value=" 	None of the above"> 	None of the above
</br>
</br>
</br>
3.	The members of the Rajya Sabha are elected by
<input type="radio" name="c3"value="the people">the people
<input type="radio" name="c3"value="Lok Sabha">Lok Sabha
<input type="radio" name="c3"value="elected members of the legislative assembly">elected members of the legislative assembly
<input type="radio" name="c3"value="elected members of the legislative council">elected members of the legislative council
</br>

</br>
4.	B. C. Roy Award is given in the field of
<input type="radio" name="c4"value=" 	Music"> 	Music
<input type="radio" name="c4"value="Journalism">Journalism
<input type="radio" name="c4"value="Medicine">Medicine
<input type="radio" name="c4"value="Environment">Environment
</br>

</br>
5.	Who is the father of Geometry?
<input type="radio" name="c5"value="Aristotle">Aristotle
<input type="radio" name="c5"value="Euclid">Euclid
<input type="radio" name="c5"value="Pythagoras">Pythagoras
<input type="radio" name="c5"value="Kepler">Kepler
</br>
<input type="submit" name="submit" value="Submit">
</div>
</div>
<div style="background-color: #fef9e7 ;width:100%;height:20%;">
</br>
<h4>
***Examinations will be conducted during the allocated times shown in the examination timetable. You are responsible to ensure that your answer scripts are submitted at the end of the examination. If you are present for the examination and do not submit your answer script, you will be deemed to have sat for and failed the examination concerned.
</h4>
</div>
</form>
</body>
</html>

<?php

$obtain=$_SESSION['obtain'];

if(isset($_POST['submit']))
{
$value1=$_POST['c1'];
if($value1=="1757")
{
$obtain=$obtain+5;
	}
else
{
$obtain=$obtain+0;
}
$value2=$_POST['c2'];
if($value2=="largest railway station")
{
$obtain=$obtain+5;
	}
else
{
$obtain=$obtain+0;
}
$value3=$_POST['c3'];
if($value3=="Theoratically no limit")
{
$obtain=$obtain+5;
}
else
{
$obtain=$obtain+0;
}
$value4=$_POST['c4'];
if($value4=="Medicine")
{
$obtain=$obtain+5;
	}
else
	{
$obtain=$obtain+0;
	}
$value5=$_POST['c5'];
if($value5=="Euclid")
	{
$obtain=$obtain+5;
	}
else
{
$obtain=$obtain+0;
    }
	$_SESSION["obtain"]=$obtain;
header("location:aptitude.php");
	}
	?>