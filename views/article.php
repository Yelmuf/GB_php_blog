<!DOCTYPE html>
<html lang="ru, en">

<head>
    <meta charset="utf-8">
    <title>Мой Первый Бл*г</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Мой первый бл*г</h1>
        <div>
            <div class="article">
                <h3><?php echo $article['title']?></h3>
                <em>Опубликовано: <?php echo $article['date']?></em>
                <p>
                    <?php echo $article['content']?>
                </p>
            </div>

        </div>
    </div>
    <footer class="footer">
        <p class="text-center">Слил over 20 php файлов в кучу
            <br /> - сделал страничку
            <br /> Copyleft © 2016</p>
    </footer>
</body>

</html>
