
<?php

session_start();
include "config.php";
include "asset/header.php";
if(empty($_SESSION['id']))
		{
			 ?>
			 <script> window.location.href="login.php";</script>
			 <?php 
		}else{
			$ok = $_SESSION['id'];
		}

		$query= $class->fetchdata(" select * from user where id='$ok'");
		$data=$query->fetch(PDO::FETCH_ASSOC);

 	           $id = $_GET['id'];
$query=$class->fetchdata("SELECT * FROM post WHERE id='$id'");
$data=$query->fetch(PDO::FETCH_ASSOC);




if(isset($_POST['done']))
		{	
			$title= $_POST['title'];
			$category= $_POST['category'];                    
			$lyrics= $_POST['lyrics'];
			
			$query=$class->update("UPDATE post SET title='$title',cat_id='$category',lyrics='$lyrics' where id ='$id'" );
			$class->redirect("index.php");
	
		}
		

?>




  
<div class="container">
<p><?php echo $ok ?></p>
<br>
<a href="logout.php" class="form-group">Logout</a></span>


  <div class="row">
  <div class="col-md-6">
<center><h1>Ads Post</h1></center>
<form method="post" enctype="multipart/form-data">
<input type="text" name="title" class="form-control" placeholder="Enter Title" required value="<?php echo $data['title']; ?>" />
<br>
<select name="category" class="form-control">

<option> Select Category </option>
<?php
		$query= $class->fetchdata(" select * from category");
		while($data=$query->fetch(PDO::FETCH_ASSOC))
		{?>
	<option value="<?php echo $data['id']; ?>"> <?php echo $data['title']; ?> </option>
		<?php }?>
</select>
<br>
<textarea class="form-control" name="lyrics" placeholder="Enter Lyrics" value="<?php echo $data['lyrics']; ?>"></textarea>
<br>
 <center> <button type="submit" value="Post" class="btn btn-primary" name="done">Submit</button></center>
  </form>
  </div>

  
  </div>
  
</div>

</body>
</html>
