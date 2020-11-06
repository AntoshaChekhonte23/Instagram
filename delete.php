<?php
	$connect = mysqli_connect("127.0.0.1","root","","Instagram");
	$text_zaprosa2 = "DELETE FROM posts WHERE id = '".$_GET['id']."'";
	mysqli_query($connect,$text_zaprosa2);
	header('Location: index.php');
?>