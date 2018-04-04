<html>
<head>
<title>Reasoning</title>
</head>
<body>
<form  method="post">
<div style="background-color:   #fef9e7  ;width:100%;height:20%;">
<font color="#34495e">
</br>
<h1>REASONING EXAMINATION</h1>
</div>
<p>
<?php 
session_start();

echo "Welcome:".$_SESSION["name"];
?>
</p>

<div style="background-color:  #fad7a0  ;width:100%;height:60%;">
<div align="right">

<h3>(5*5=25)</h3>
</div>

1. 	Look at this series: 2, 1, (1/2), (1/4), ... What number should come next?
<input type="radio" name="e1"value="(1/3)">(1/3)
<input type="radio" name="e1"value="(1/8)">(1/8)
<input type="radio" name="e1"value="(2/8)">(2/8)
<input type="radio" name="e1"value="(1/16)">(1/16)
</br>
</br>
</br>
2. 	B2CD, _____, BCD4, B5CD, BC6D
<input type="radio" name="e2"value="B2C2D">B2C2D
<input type="radio" name="e2"value="BC3D">BC3D
<input type="radio" name="e2"value="B2C3D">B2C3D
<input type="radio" name="e2"value="BCD7">BCD7
</br>
</br>
</br>
3.	  	Look at this series: 53, 53, 40, 40, 27, 27, ... What number should come next?
<input type="radio" name="e3"value="12">12
<input type="radio" name="e3"value="14">14
<input type="radio" name="e3"value="17">17
<input type="radio" name="e3"value="53">53
</br>
</br>
</br>
4.  	Look at this series: 22, 21, 23, 22, 24, 23, ... What number should come next?
<input type="radio" name="e4"value="22">22
<input type="radio" name="e4"value="24">24
<input type="radio" name="e4"value="25">25
<input type="radio" name="e4"value="26">26
</br>
</br>
</br>
5. 	Look at this series: 36, 34, 30, 28, 24, ... What number should come next?
<input type="radio" name="e5"value="20">20
<input type="radio" name="e5"value="22">22
<input type="radio" name="e5"value="23">23
<input type="radio" name="e5"value="26">26
</br>
<input type="submit" name="submit" value="Submit">
</div>
</div>
<div style="background-color:  #fef9e7  ;width:100%;height:20%;">
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

$value1=$_POST['(1/8)'];
if($value1=="Theoratically no limit")
{
$obtain=$obtain+5;
	}
else
{
$obtain=$obtain+0;
}
$value2=$_POST['e2'];
if($value2=="BC3D")
{
$obtain=$obtain+5;
	}
else
{
$obtain=$obtain+0;
}
$value3=$_POST['e3'];
if($value3=="14")
{
$obtain=$obtain+5;
}
else
{
$obtain=$obtain+0;
}
$value4=$_POST['25'];
if($value4=="Theoratically no limit")
{
$obtain=$obtain+5;
	}
else
	{
$obtain=$obtain+0;
	}
$value5=$_POST['e5'];
if($value5=="22")
	{
$obtain=$obtain+5;
	}
else
{
$obtain=$obtain+0;
    }
	$_SESSION["obtain"]=$obtain;
header("location:result.php");	
	}
	?>