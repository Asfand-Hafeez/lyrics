<?php
class crud {

private $db;
function __construct ($db_con)
{
	$this->db= $db_con;
	
}

public function fetchdata($sql)
{
	$query= $this->db->prepare($sql);
	$query->execute();
	return $query;
	}


public function redirect($sql)
{
	header("location:".$sql);
	// 	return true;
}
	
public function update($sql)
{
	try
	{
		$stmt=$this->db->prepare($sql);
		$stmt->execute();
		return true;
	}
		catch (PDOException $e)
	{
		echo $e->getMessage();
		return false;
	}
	
}


public function insert($sql)
{
	try
	{
		
		$stmt=$this->db->prepare($sql);
		$stmt->execute();
		return $stmt;
	}
		catch (PDOException $e)
	{
		echo $e->getMessage();
		return false;
	}
	
}

public function delet ($sql)	
{
	try
	{
		
		$stmt=$this->db->prepare($sql);
		$stmt->execute();
		return true;
	}
		catch (PDOException $e)
	{
		echo $e->getMessage();
		return false;
	}
	
}




	public function is_loggedin()
	{
		if(isset($_SESSION['id']))
		{
			return true;
		}
	}
public function doLogin($email,$password)
	{
		try
		{
			$stmt = $this->db->prepare("SELECT id,  email, password FROM user WHERE email=:email && password=:password ");
			$stmt->execute(array(':email'=>$email, ':password'=>$password));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount()>0)
			{
			session_start();
			$_SESSION['id'] = $userRow['id'];
						
		

					return true;
			
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	public function doLogout()
	{
		session_destroy();
		unset($_SESSION['id']);
		return true;
	}
}
?>