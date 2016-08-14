<!DOCTYPE html>
<html lang="ru, en">

<head>
  <meta charset="utf-8">
  <title>Мой Первый Бл*г</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="../style.css">
</head>

<body>
  <div class="container">
    <h1>Мой первый бл*г</h1>
    <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
      <div class="breadcrumb">
        <a class="btn" href="index.php">Назад</a>
        <input value="Сохранить" type="submit" class="btn btn-primary pull-right">
      </div>
      <div class="form-group">
        <label>Название статьи</label>
        <input type="text" class="form-control" maxlength="255" placeholder="Название"  name="title" required
          value="<?php if(isset($article)) echo $article['title']; ?>">
      </div>
      <div class="form-group">
        <label>Дата создания</label>
        <div class="input-group">
          <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
          <input type="date" class="form-control" name="date" required
            value="<?php if(isset($article)) echo $article['date'];
              else echo gmDate("Y-m-d");?>">
        </div>
      </div>
      <div class="form-group">
        <label>Содержание статьи</label>
        <textarea type="text" class="form-control" placeholder="Содержание" rows="8"
        style="resize: vertical;" name="content" required><?php if(isset($article)) printf('%s', $article['content']); ?></textarea>
      </div>
    </div>
  </form>
  </div>
  <footer class="footer">
    <p class="text-center">Слил over 20 php файлов в кучу
      <br /> - сделал страничку
      <br /> Copyleft © 2016</p>
  </footer>
</body>

</html>
