<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Мой Первый Блог</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h1>Мой первый блог</h1>
    <div>
    <div class="article">
      <?php foreach($articles as $a): ?>
    <h3><a href="article.php?id=<?php echo $a['id']?>">
        <?php echo $a['title']?></a></h3>
        <em> Опубликовано: <?php echo $a['date']?></em>
        <p><?php echo $a['content']?></p>
        <?php endforeach ?>
        </div>
    </div>
    <footer>
        <p>Мой Первый Блог<br>
            Copyright &copy; 2016</p>
        </footer>
    </div>
</body>
</html>
