<?php

include_once "config.php ";
include "asset/header.php";

if(isset($_POST['done']))
		{
			$name= $_POST['name'];
			$email= $_POST['email'];                    
			$gender= $_POST['gender'];
			$password= $_POST['password'];
			$query=$class->insert("INSERT INTO user  ( name, email, password, gender) VALUES ('$name','$email','$password','$gender')");
			$class->redirect("login.php");
		}
		

?>
<div class="container">

<div class="row">


<div class="col-md-6">
<center><h1>Registration Here</h1></center>
<form method="post" enctype="multipart/form-data">
<input type="text" name="name" class="form-control" placeholder="Enter Name" required />
<br>
<input type="text" name="email" class="form-control" placeholder="Enter Email" required />
<br>
<input type="number" name="password" class="form-control" placeholder="Enter Password" required />
<br>
<input  name="gender" type="checkbox" class="form-group" value="male" >Male
  <input  name="gender" type="checkbox" class="form-group" value="female"  >Female<br>
  <br>
  <center> <button type="submit" value="Post" class="btn btn-primary" name="done">Submit</button></center>

<br>
<br>
<center><button class="btn btn-info"><a href="login.php" class="form-group text-white">Already Account</a></button></center>


</div>
</div>
</form>
</div>








