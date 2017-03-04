<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
if($_POST['search'])
{
	include('lib.php');
	$choice=$_POST['categories'];
	
	if($choice=='videos')
	{
		header('location:videos.php');
	}
	elseif($choice=='books')
	{
		header('location:books.php');
	}
	elseif($choice=='material')
	{
		header('location:material.php');
	}
	elseif($choice=='faculty')
	{
		header('location:faculty.php');
	}
	
}
?>
</body>
</html>