<?php
switch(isset($_GET['id'])) {
case "home";
include('home.php');
break;

case "news":
include('news.html');
break;
}  
?>
<!DOCTYPE html>
<html>
<head>
  <title>Judul</title>
  <a href="index.php?id=home">Home<a/>
  <a href="news.php?id=news">News<a/>
</head>
<body>
</body>
</html>