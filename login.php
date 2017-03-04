<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
if($_POST['login'])
{
	include('lib.php');
	
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$data=mysql_query("SELECT*FROM `customer` WHERE `user_id`='$user'");
	
	$row=mysql_fetch_array($data);
	
	$num_rows=mysql_num_rows($data);
	if($num_rows>0){
	if($row['password']==$pass){
		header('location:select.php');
	}
	else
	{
		
	header('location:about.php');
	
	}
	}
	else
	{
		header('location:about.php');
	}
	
}
		

?>
</body>
</html>