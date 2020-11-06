<?php
	$connect = mysqli_connect("127.0.0.1","root","","Instagram");
	$text_zaprosa1 = "UPDATE posts SET text  = '".$_GET["text"]."', img = '".$_GET["img"]."', id = '".$_GET["id"]."' WHERE id =".$_GET['id'];
	$zapros = mysqli_query($connect, $text_zaprosa1);
	header('Location: index.php');
?>