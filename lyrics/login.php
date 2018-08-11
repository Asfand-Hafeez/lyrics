<?php
include "asset/header.php";
include_once "config.php";

if($class->is_loggedin()!="")
{
	$class->redirect('index.php');
}
if(isset($_POST['done']))
{
$email= $_POST['email'];
$password= $_POST['password'];


if($class->doLogin($email,$password))
	{
		
		$class->redirect("index.php");
		
	}
	else
	{
		$error = "Wrong Details !";
	}
}
?>
<div class="container">

<div class="row">
<div class="col-md-6">
<center><h1>Login</h1></center>

<form method="post">
  <input  type="text" name="email" required  class="form-control" placeholder="Email" >
  <br>
<input  type="password" name="password" class="form-control" required placeholder="Password">
<br>
 <center> <button type="submit" value="Post" class="btn btn-primary" name="done">Submit</button></center>

</form>
<br>
<br>
<center><button class="btn btn-info"><a href="register.php" class="form-group text-white">Creat New Account</a></button></center>
</div>
</div>
</div>



