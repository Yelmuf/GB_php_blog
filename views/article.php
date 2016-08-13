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
                <h3><?php echo $article['title']?></h3>
                <em>Опубликовано: <?php echo $article['date']?></em>
                <p>
                    <?php echo $article['content']?>
                </p>
            </div>

        </div>
        <footer>
            <p>Мой Первый Блог
                <br> Copyright © 2016</p>
        </footer>
    </div>
</body>

</html>
