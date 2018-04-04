<!DOCTYPE html>
<html>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
   

}
</style>
<body bgcolor="gray">

<h1>Register</h1>

<form action="login.php" method="post" style="border:1px solid #ccc">
  <div class="container">
  <font color="#f39c12">
  

  <label><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>
	
	<label><b>Gender</b></label>
    <input type="radio"  name="gender" value="male"  >MALE
	 <input type="radio"  name="gender" value="female">FEMALE
	 </br>
	 </br>
	 <label><b>State</b></label>
	<input type="text" name="state"/> 
	</br>
	</br>
	 
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw"  required>

    <input type="checkbox" checked="checked"> Remember me
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <input type="submit" name="submit" value="submit">
    </div>
  </div>
</form>

</body>
</html>

<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('onlineexam') or die('plz check database'); 
if(isset($_POST['submit']))
{
$name= $_POST['name'];
$gender=$_POST['gender'];
$state= $_POST['state'];
$email= $_POST['email'];
$password= $_POST['psw'];


$ins= mysql_query("insert into  reg set name='$name',gender='$gender',state='$state',email='$email',psw='$password'");

 if($ins)
    {
        echo "inserted";
    }
    else
    {
        echo mysql_error();
    
}
}
?>
