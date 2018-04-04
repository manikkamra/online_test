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

<body background="iq6.jpg">
<div id="login">
<h1>Login</h1>
<form action=""  method="post">
<fieldset>
<font color="red">
    <label><b><h1>Username</h1></b></label>
    <input type="text" placeholder="Enter Username" name="email" required>

    <label><b><h1>Password</h1></b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <input type="submit" name="login" value="Login">
    <a href="forgot.html"> Forgot password</a> 
	
	</fieldset>
	</div> <!-- end login -->
</body>
</html>

<?php
 // session_start();
  $con=mysql_connect('localhost','root','')or die(mysql_error());
  mysql_select_db('onlineexam',$con)or die("plz check database");
  if(isset($_POST['login']))
  {
   $name=$_POST['email'];
   $pas=$_POST['psw'];
 
  
	 //session_start();
	//  if(!empty($_POST['username']))
	//   {
        $query = mysql_query("select *from reg where email='$name' and psw='$pas'");
    // $row=mysql_fetch_array($query)or die(mysql_error());
	   $row=mysql_num_rows($query);
      if($row==1)
	  {  
              session_start();
	        $_SESSION['name']=$name;
		    header("location:list.php");
			//echo "user and password valid";
	  }
	  else
	  {
		   echo "user and password not valid";
	  }
  /*if(!empty($row['user_name']) and !empty($row['pass']))
  {
	  if($row['user_name']==$name and $row['pass']==$pas)
	  {
	 $_session['us']=$row['user_name'];  
	 echo "user and password valid";
	 echo $row['user_name'];
	 echo $row['pass'];
	 echo $name;
	 echo $pas;
     }
     else
     {
	  echo "user and password is not valid";
	   echo $row['user_name'];
	    echo $row['pass'];
		echo $name;
	    echo $pas;
	 
    }
    
	   }*/
    
	}
    
  ?>
