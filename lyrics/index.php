
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

 	



if(isset($_POST['done']))
		{	$user_id=$_SESSION['id'];
			$title= $_POST['title'];
			$category= $_POST['category'];                    
			$lyrics= $_POST['lyrics'];
			
			$query=$class->insert("INSERT INTO post  ( title,user_id, cat_id, lyrics) VALUES ('$title','$user_id','$category' ,'$lyrics')");
		
	
		}
		

?>




  
<div class="container">
<span> <?php echo $ok ?>Welcome <a href="index.php"><?php echo $data['name'] ?></a> 
<br>
<a href="logout.php" class="form-group">Logout</a></span>


  <div class="row">
  <div class="col-md-6">
<center><h1>Ads Post</h1></center>
<form method="post" enctype="multipart/form-data">
<input type="text" name="title" class="form-control" placeholder="Enter Title" required />
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
<textarea class="form-control" name="lyrics" placeholder="Enter Lyrics"></textarea>
<br>
 <center> <button type="submit" value="Post" class="btn btn-primary" name="done">Submit</button></center>
  </form>
  </div>
  
  <div class="col-md-6">
 
<center><h1>Detail</h1></center>
<table class="table table-hover table-bordered">
<tr>

<th class="text-center">title</th>

<th class="text-center">Lyrics</th>
<th class="text-center">Action</th>
</tr>
<?php
	   
	   $query= $class->fetchdata("select * from post where user_id='$ok'");
while ($data=$query->fetch(PDO::FETCH_ASSOC))
{	?>

<tr> 

<td class="text-center"><?php echo $data['title']; ?></td>    
<td class="text-center"><?php echo $data['lyrics']; ?></td>

<td class="text-center"> <button  type="button" class="btn btn-success"><a href="edit.php?id=<?php echo $data['id'];?>" class="form-group text-white">Edit</a></button>
<button  type="button" class="btn btn-warning"><a href="delete.php?id=<?php echo $data['id'];?>" class="form-group text-white">Delet</a></button></td>
</tr>
<?php
}
?>
</table>

  </div>
  
  </div>
  
</div>

</body>
</html>
