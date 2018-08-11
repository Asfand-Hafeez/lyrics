<?php
include "assets/header.php";	
include_once "config.php ";
           $id = $_GET['id'];
$query=$class->delet("DELETE FROM post  WHERE id='$id'");
$class->redirect("index.php");


?>