<!DOCTYPE html>
<html lang="ru, en">

<head>
    <meta charset="utf-8">
    <title>Бл*г</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1><a href="index.php">Бл*г</a></h1>
        <div class="breadcrumb">
          <a class="btn" href="index.php">Назад</a>
          <a class="btn pull-right" href="admin/index.php">
            <span class="glyphicon glyphicon-tasks"></span></a>
        </div>
            <div class="article">
                <h3><?php echo htmlspecialchars($article['title'])?></h3>
                <em>Опубликовано: <?php echo $article['date']?></em>
                <p>
                    <?php echo htmlspecialchars($article['content'])?>
                </p>
            </div>

        </div>
    <footer class="footer container-fluid">
        <p class="text-center">Слил over 20 php файлов в кучу
            <br /> - сделал страничку
            <br /> Copyleft © 2016</p>
    </footer>
</body>

</html>
