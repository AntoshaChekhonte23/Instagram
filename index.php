<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="icon" type="text/css" href="log.png">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

	<style type="text/css">
		.none{
			display: none;
		}
		.width{
			width:28px;
			height: 25px;
		}
		.forma{
			display: none;
		}
		.button{
			display: block;
		}
		.bookmarks{
			width:25px;
			height: 28px;
			margin-left: auto;
			margin-right: 10px;
		}
		.shrift{
			font-family: 'Roboto', sans-serif;
			font-size: 15px;
			color:#00B7F0;
			cursor: pointer;
			border:none;
			
			background-color: white;
			padding: 0px;
		}
		.shrift:focus{
			outline: none;
		}
		.delete{
			padding-top: 0px;
		}
		.fontsz div.col-8,div.one{
			font-family: 'Roboto', sans-serif;
			font-size: 15px;
		}
		.fontsz a {
			font-family: 'Roboto', sans-serif;
			font-size: 13px;
			color:#00B7F0;
		}
		.fontsz p {
			font-family: 'Roboto', sans-serif;
			font-size: 15px;
		}
		.fontsz{
			font-family: 'Roboto', sans-serif;
			font-size: 17px;
		}
		.bold{
			font-weight: 500;
		}
		.marginLB{
			margin-top:-10px;
			margin-bottom: -10px;
		}
		.gray{
			color:gray;
		}
		.smallfont{
			font-size: 11px;
			color:gray;
		}
		.form-control{
			width:500px;
		}
	</style>
  </head>
  <body>
	<div class="p-3 border-bottom sticky-top bg-white"> <!--шапка-->
		<div class="col-8 mx-auto">
			<div class="row">
				<div class="col-4">
					<div class="row">
						<div class="col-1 px-0">
							<img src="logo.png" class="w-75">
						</div>
						<div class="col-1 px-0 text-center">
							<img src="line.png" class="w-50">
						</div>
						<div class="col-4 px-0">
							<img src="logo2.png" class="w-75">
						</div>
					</div>
				</div>
				<div class="col-4">
					<input type="" name="" placeholder="поиск" class="border rounded text-center px-3 ml-5 border-secondary">
				</div>
				<div class="col-4">
					<div class="row">
						<div class="col-6"></div>
						<div class="col-2 px-0 pl-2">
							<img src="1.png" class="width">
						</div>
						<div class="col-2 px-0 pl-2">
							<div class="dropdown">
							  <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    <img src="2.png" class="width">
							  </a>
							</div>
						</div>
						<div class="col-2 px-0 pl-2">
							<img src="3.png" class="width">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		$connect = mysqli_connect("127.0.0.1","root","","Instagram");
		$text_query = 'SELECT * FROM posts';
	    $query = mysqli_query($connect, $text_query);
	?>

	<div class="col-6 mx-auto" > <!--ГЛАВНЫЙ БЛОК-->
		<div class="row"> 
			<!--ЛЕВЫЙ БЛОК. ДИВ ДЛЯ ПОСТОВ-->
			<div class="col-8 px-0 my-2"> 
				
			<?php 
				for ($i=0; $i < $query->num_rows; $i++) { 
				$result = $query->fetch_assoc();
			 ?>			
				
				<!--САМ ПОСТ-->
				<div class="mt-5 border rounded">   
					<div class="col-12 px-1">
						<div class="row">
							<div class="col-1 text-right pb-2 pt-2 px-0 ml-2">
								<img src="icon.png" class="w-75 rounded-circle">
							</div>
							<div class="col-10 pb-4 pt-3 text-left">
								<h6 class="mb-0 fontsz"><?php echo $result["user"]; ?></h6>	
							</div>													
						</div>
					</div>
					<div class="col-12" style="height: 400px; background-image: url(<?php echo $result["img"]; ?>); background-size: 100% 100%"> <!--картинка поста-->
					</div>
					<div class="col-12 py-2 mb-2">  <!--текстовые элементы поста-->
						<div class="row mb-2 ml-0">
							<img class="width" src="like.png">
							<img class="width ml-3 mr-3" src="message.png">
							<img class="width" src="share.png">
							<img class="bookmarks" src="bookmarks_ .PNG">
						</div>
						<div class="row ml-0">
							<p class=" mr-2 bold"><?php echo $result["user"];?></p>
							<p><?php echo $result["text"]; ?></p>
						</div>
						<div class="marginLB ml-0">
							<p class="gray">Посмотреть все комментарии(500)</p>
						</div>
						<div class="ml-0">
							<p class="smallfont">5 НЕДЕЛЬ НАЗАД</p>
						</div>
						<div class="row ml-0">
							<div class=" w-100 border rounded px-3 py-3 mr-3 mb-3 forma">
								<form action="update.php" method="GET">
									<input type="text" class="form-control mb-3 w-100 none" placeholder="ID" name="id" value='<?php echo $result["id"];?>' >
									<input type="text" class="form-control mt-3 mb-3 w-100" placeholder="Фотография" name="img">
									<textarea type="text" class="form-control mb-3 w-100 " placeholder="Текст" name="text"></textarea> 
									<button class="shrift">Редактировать</button>
								</form>					
							</div>
							<div class="ml-0 row mt-0">
								<button class="shrift mr-3 button">Редактировать</button>
								<form action="delete.php" method="GET">
		 							<input class="none" name="id" value='<?php echo $result["id"];?>'>
									<button class="shrift delete">Удалить</button>
	 							</form>	
							</div>
							
							
						</div>						
					</div>
				</div>
				<!-- ПОСТ ЗАКРЫЛСЯ-->

			<?php } ?>
			</div> 
			<!--ДИВ ДЛЯ ПОСТОВ закрылся-->


			<div class="col-4 mt-5">  <!--ПРАВЫЙ БЛОК. ПОДПИСКИ И ТД-->
				<div class="my-2 border rounded px-3 py-2">
					<div class="col-12">
						<div class="row">
							<div class="col-2 px-0">
								<img src="3.png" class="w-100 rounded-circle">
							</div>
							<div class="col-10 fontsz">
								<h6 class="mb-0">Rotatoskr</h6>
								<p class="text-secondary mb-0">...</p>
							</div>
						</div>
					</div>
				</div>
				<div class="mt-2 border my-2 rounded  px-3 py-2 fontsz one">
					<div class="col-12">
						<div class="row">
							<div class="col-4 text-left px-0 pb-3 pt-1">Истории</div>
							<div class="col-8 text-left pb-3 pt-1">Смотреть все</div>
						</div>
						<div class="row">
							<div class="col-3 px-1">
								<img src="JF.png" class="w-100 rounded-circle">
							</div>
							<div class="col-9 py-2" >
								<p>jimmyfallon</p>
							</div>
						</div>
						<div class="row mt-2">
							<div class=" col-3 px-1">
								<img src="pew.png" class="w-100 rounded-circle">
							</div>
							<div class="col-9 py-2" >
								<p>PewDiePie</p>
							</div>
						</div>
						<div class="row mt-2">
							<div class=" col-3 px-1">
								<img src="kodz.png" class="w-100 rounded-circle">
							</div>
							<div class="col-9 py-2" >
								<p>Hideo Kojima</p>
							</div>
						</div>						
					</div>
				</div>
				<div class="my-2 border rounded px-3 py-2 fontsz">  <!--ПРАВЫЙ БЛОК. РЕКОМЕНДАЦИИ-->
					<div class="col-12">
						<div class="row">
							<div class="col-8 text-left px-0 pb-3 pt-1">Рекомендации для вас</div>
							<div class="col-4 text-left pb-3 pt-1">Все</div>
						</div>
						<div class="row">
							<div class="col-3 px-2">
								<img src="mbn.png" class="rounded-circle w-100">
							</div>
							<div class="col-9 ">
								<p class="mb-0">mbn360</p>
								<a href="" class="mb-0">Подписаться</a>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-3  px-2" >
								<img src="9gag.png" class="rounded-circle w-100">
							</div>
							<div class="col-9 ">
								<p class="mb-0">9gag</p>
								<a href="" class="mb-0">Подписаться</a>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-3  px-2" >
								<img src="groot.png" class="rounded-circle w-100">
							</div>
							<div class="col-9 " >
								<p class="mb-0">groot</p>
								<a href="" class="mb-0">Подписаться</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
    	let button = document.querySelectorAll('.button');
    	let forma = document.querySelectorAll('.forma');
    	let delete_ = document.querySelectorAll('.delete');
    	for(let i=0;i<button.length;i++){
    		button[i].onclick = function(){
    			forma[i].style.display = 'block';
    			button[i].style.display = 'none';

    		}
    	}
    </script>
  </body>
</html>