<html>
<head>
<title>Aptitude</title>
</head>
<body>
<form  method="post">
<div style="background-color: #ebf5fb  ;width:100%;height:20%;">
<font color="#34495e">
</br>
<h1>APTITUDE EXAMINATION</h1>
</div>
<p>
<?php 
session_start();

echo "Welcome:".$_SESSION["name"];
?>
</p>

<div style="background-color:   #aed6f1 ;width:100%;height:60%;">
<div align="right">

<h3>(5*5=25)</h3>
</div>

1.Find the simple interest on Rs. 5200 for 2 years at 6% per annum.
<input type="radio" name="d1" value="Rs. 450">Rs. 450
<input type="radio" name="d1" value="Rs. 524">Rs. 524
<input type="radio" name="d1" value="Rs. 600">Rs. 600
<input type="radio" name="d1" value="Rs. 624">Rs. 624
</br>
</br>
</br>
2.If a:b:c = 3:4:7, then the ratio (a+b+c):c is equal to 
<input type="radio" name="d2 "value="2:1">2:1
<input type="radio" name="d2"value="14:3">14:3
<input type="radio" name="d2"value="7:2">7:2
<input type="radio" name="d2 "value="1:2">1:2
</br>
</br>
</br>
3.	A clock is started at noon. By 10 minutes past 5, the hour hand has turned through:
<input type="radio" name=" d3"value="145º">145º
<input type="radio" name=" d3"value="150º">150º
<input type="radio" name="d3"value="155º">155º
<input type="radio" name="d3"value="160º">160º
</br>
</br>
</br>
4.What was the day of the week on 28th May, 2006? 
<input type="radio" name="d4"value="Thursday">Thursday
<input type="radio" name=" d4"value="Friday">Friday
<input type="radio" name="d4"value="Saturday">Saturday
<input type="radio" name="d4 "value="Sunday">Sunday
</br>
</br>
</br>
5.If one-third of one-fourth of a number is 15, then three-tenth of that number is: 
<input type="radio" name="d5" value="35">35
<input type="radio" name="d5" value="36">36
<input type="radio" name="d5" value="54">54
<input type="radio" name="d5" value=" 180"> 180
</br>
<input type="submit" name="submit" value="Submit">
</div>
</div>
<div style="background-color:#ebf5fb;width:100%;height:20%;">
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

$value1=$_POST['d1'];
if($value1=="624")
{
$obtain=$obtain+5;
	}
else
{
$obtain=$obtain+0;
}
$value2=$_POST['d2'];
if($value2=="2:1")
{
$obtain=$obtain+5;
	}
else
{
$obtain=$obtain+0;
}
$value3=$_POST['d3'];
if($value3=="155º")
{
$obtain=$obtain+5;
}
else
{
$obtain=$obtain+0;
}
$value4=$_POST['d4'];
if($value4=="Sunday")
{
$obtain=$obtain+5;
	}
else
	{
$obtain=$obtain+0;
	}
$value5=$_POST['d5'];
if($value5==" 180")
	{
$obtain=$obtain+5;
	}
else
{
$obtain=$obtain+0;
    }
	$_SESSION["obtain"]=$obtain;
header("location:reasoning.php");
	}
	?>
 

 


