<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Carrois+Gothic+SC&family=DM+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style1.css">
	<link rel="stylesheet" href="fonts.css">
</head>
<body>
	<div class="container">
    <form action="insert.php" method="GET">
      <div class="mt-3">
        <span class="font-weight-bold Admin__text">Имя</span>
        <input type="text" name="title" class="form-control">
      </div>    
      <div class="mt-3">
        <span class="font-weight-bold Admin__text">Картинка</span>
        <input type="" name="img" class="form-control">
      </div>
      <div class="mt-3">
        <span class="font-weight-bold Admin__text">Текст поста</span>
        <input type="" name="text" class="form-control">
      </div>  
      <button class="main__btn2 default-btn">Создать</button>
    </form>

  </div>
	
	
</body>
</html>