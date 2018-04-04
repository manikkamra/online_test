<html>
<head>
<title>English</title>
</head>
<body>
<form  method="post">
<div style="background-color: #f5b7b1  ;width:100%;height:20%;">
<font color="#34495e">
</br>
<h1>ENGLISH EXAMINATION</h1>
</div>

<p>
<?php 
session_start();

echo "Welcome:".$_SESSION["name"];
?>
</p>



<div style="background-color:  #f1948a ;width:100%;height:60%;">
<div align="right">
<h3>(5*5=25)</h3>
</div>

1.	Don't make so much noise. Noriko ..... to study for her ESL test!
<input type="radio" name="b1" value="	try">	try
<input type="radio" name="b1" value="tries">tries
<input type="radio" name="b1" value="	tried">	tried
<input type="radio" name="b1" value="	is trying">	is trying
</br>
</br>
</br>
2.	Jun-Sik ..... his teeth before breakfast every morning.
<input type="radio" name="b2"value="	will cleaned">	will cleaned
<input type="radio" name="b2"value="is cleaning">is cleaning
<input type="radio" name="b2"value="	cleans">	cleans
<input type="radio" name="b2"value="	clean">	clean
</br>
</br>
</br>
3.	Sorry, she can't come to the phone. She ..... a bath!
<input type="radio" name="b3"value="having">having	
<input type="radio" name="b3"value="	have">	have	
<input type="radio" name="b3"value="		has">	has
<input type="radio" name="b3"value="	is having">is having
</br>
</br>
</br>
4.	..... many times every winter in Frankfurt  
	<input type="radio" name="b4"value="		It snows">	It snows
	<input type="radio" name="b4"value="		It snowed">	It snowed
	<input type="radio" name="b4"value="	It is snowing">It is snowing
	<input type="radio" name="b4"value="		It is snow">	It is snow
	</br>
</br>
</br>
5.	How many students in your class ..... from Korea?
<input type="radio" name="b5"value="	comes">	comes
<input type="radio" name="b5"value="	come">	come
<input type="radio" name="b5"value="	came">	came
<input type="radio" name="b5"value="		are coming">	are coming
<div align="left">

<input type="submit" name="submit" value="Submit">
</div>
</div>
<div style="background-color:#f5b7b1;width:100%;height:20%;">
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

$value1=$_POST['b1'];
if($value1=="is trying")
{
$obtain=$obtain+5;
	}
else
{
$obtain=$obtain+0;
}
$value2=$_POST['b2'];
if($value2=="cleans")
{
$obtain=$obtain+5;
	}
else
{
$obtain=$obtain+0;
}
$value3=$_POST['b3'];
if($value3=="is having")
{
$obtain=$obtain+5;
}
else
{
$obtain=$obtain+0;
}
$value4=$_POST['b4'];
if($value4=="It snows")
{
$obtain=$obtain+5;
	}
else
	{
$obtain=$obtain+0;
	}
$value5=$_POST['b5'];
if($value5=="come")
	{
$obtain=$obtain+5;
	}
else
{
$obtain=$obtain+0;
    }
	$_SESSION["obtain"]=$obtain;
header("location:gk.php");
	}
	?>