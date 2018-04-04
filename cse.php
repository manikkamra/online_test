<html>
<head>
<title>CSE</title>
</head>
<body>

<form  method="post">
<div style="background-color: #d4e6f1 ;width:100%;height:20%;">
<font color="#34495e" />
</br>
<h1>COMPUTER SCIENCE EXAMINATION</h1>
</div>
<p>
<?php 
session_start();

echo "Welcome:".$_SESSION["name"];
?>
</p>

<div style="background-color:#a9cce3;width:100%;height:60%;">
<div align="right">



<h3>(5*5=25)</h3>
</div>

1.  What is the maximun number of dimensions an array in C may have?
<input type="radio" name="a1" value="Two">Two
<input type="radio" name="a1" value="Eight">Eight
<input type="radio" name="a1" value="Twenty">Twenty
<input type="radio" name="a1" value="Theoratically no limit">Theoratically no limit
</br>
</br>
</br>
2. Representation of data structure in memory is known as:  
<input type="radio" name="a2"value="Recursive">Recursive
<input type="radio" name="a2"value="Abstract data type">Abstract data type
<input type="radio" name="a2"value="Storage structure">Storage structure
<input type="radio" name="a2" value="File structure">File structure
</br>
</br>
</br>
3. The information about an array that is used in a program will be stored in
<input type="radio" name="a3"value="symbol table">symbol table
<input type="radio" name="a3"value="activation record">activation record
<input type="radio" name="a3"value="system table">system table
<input type="radio" name="a3 "value="dope vector">dope vector
</br>
</br>
</br>
4. The fields in a structure of a C program are by default"
<input type="radio" name="a4"value="protected">protected
<input type="radio" name="a4"value="public">public
<input type="radio" name="a4"value="private">private
<input type="radio" name="a4"value="none of the above">none of the above
</br>
</br>
</br>
5. The body tag usually used after
<input type="radio" name="a5"value="Title tag">Title tag
<input type="radio" name="a5"value="HEAD tag">HEAD tag
<input type="radio" name="a5"value="EM tag">EM tag
<input type="radio" name="a5"value="FORM tag">FORM tag
<div align="left">

<input type="submit" name="submit" value="Submit">
</div>
</div>
<div style="background-color:#d4e6f1;width:100%;height:20%;">
</br>
<h4>
***Examinations will be conducted during the allocated times shown in the examination timetable. You are responsible to ensure that your answer scripts are submitted at the end of the examination. If you are present for the examination and do not submit your answer script, you will be deemed to have sat for and failed the examination concerned.
</h4>
</div>
</form>
</body>
</html>

<?php

if(isset($_POST['submit']))
{
$obtain=0;
$value1=$_POST['a1'];
if($value1=="Theoratically no limit")
{
$obtain=$obtain+5;
	}
else
{
$obtain=$obtain+0;
}
$value2=$_POST['a2'];
if($value2=="Abstract data type")
{
$obtain=$obtain+5;
	}
else
{
$obtain=$obtain+0;
}
$value3=$_POST['a3'];
if($value3=="dope vector")
{
$obtain=$obtain+5;
}
else
{
$obtain=$obtain+0;
}
$value4=$_POST['a4'];
if($value4=="public")
{
	$obtain=$obtain+5;
	}
	else
	{
		$obtain=$obtain+0;
	}
	$value5=$_POST['a5'];
	if($value5=="HEAD tag")
	{
		$obtain=$obtain+5;
	}
	else
	{
		$obtain=$obtain+0;
	}
$_SESSION["obtain"]=$obtain;
header("location:english.php");	
	}
	?>