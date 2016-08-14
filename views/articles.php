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
        <div class="breadcrumb btn-toolbar">
          <a class="btn pull-right" href="admin/index.php">
            <span class="glyphicon glyphicon-tasks"></span></a>
        </div>
            <div class="article">
                <?php foreach($articles as $a): ?>
                <h3><a href="article.php?id=<?php echo $a['id']?>">
                    <?php echo htmlspecialchars($a['title'])?></a></h3>
                <em> Опубликовано: <?php echo $a['date']?></em>
                <p><?php echo articles_intro(htmlspecialchars($a['content']))?>
                </p>
                <?php endforeach ?>
            </div>


    </div>
    <footer class="footer container-fluid">
        <p class="text-center">Слил over 20 php файлов в кучу
            <br /> - сделал страничку
            <br />Copyleft &copy; 2016</p>
    </footer>
</body>

</html>
