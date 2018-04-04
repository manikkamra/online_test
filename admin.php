<html>
<head>
<title>Login</title>
<style type="text/css">
body {
background-color: #f4f4f4;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 16px;
line-height: 1.5em;
}

#login {
margin: 50px auto;
width: 300px;
}
form fieldset input[type="text"], input[type="password"] {
background-color: #e5e5e5;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 14px;
height: 50px;
outline: none;
padding: 0px 10px;
width: 280px;
-webkit-appearance:none;
}

form fieldset input[type="submit"] {
background-color: #008dde;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #f4f4f4;
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 40px;
text-transform: uppercase;
width: 270px;
-webkit-appearance:none;
}



</style>
</head>

<body background="iq10.jpg">
<div id="login">
<font color="#4d1300">
<h1>Admin Login</h1>
<form action=""  method="post">
<fieldset>
<font color="#4d1300">

    <label><b><h1>Username</h1></b></label>
    <input type="text" placeholder="Enter Username" name="manik" required>

    <label><b><h1>Password</h1></b></label>
    <input type="password" placeholder="Enter Password" name="manik" required>
        
    <input type="submit" name="submit" value="Login">
    
	
	</fieldset>
	</div> <!-- end login -->
</body>
</html>

<?php 
 if(isset($_POST['submit']))
 {
$p=$_POST['manik'];
$q=$_POST['manik'];
if($p=="manik"&&$q=="manik")
{
  header("location:adminhome.php");
}
else
{
 echo "invalid password";	
}
		
			
}
?>

