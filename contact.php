<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include 'example.php';

$movies = new SimpleXMLElement($xmlstr);

echo $movies->movie[0]->plot;
echo "<br> <br>";
echo $movies->movie[0]->add;
echo "<br> <br>";
echo $movies->movie[0]->email;
?>
</body>
</html>