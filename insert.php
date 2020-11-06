<?php
	$connect = mysqli_connect("127.0.0.1","root","","Instagram");
	$text_zaprosa_vstavit = "INSERT INTO posts (id,user,img,text) VALUES ('','".$_GET["title"]."','".$_GET["img"]."','".$_GET["text"]."')";
	$zapros_dlya_vvoda = mysqli_query($connect, $text_zaprosa_vstavit);
	header('Location: index.php');
?>