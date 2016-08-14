<!DOCTYPE html>
<html lang="ru, en">
  <head>
    <meta charset="utf-8">
    <title>Articles - Admin view</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
  </head>

  <body>

    <div class="container">
        <h1><a class="" href="../index.php">Мой первый бл*г</a></h1>

    <div class="breadcrumb btn-toolbar">
      <a class="btn btn-primary" href="index.php?action=add">Добавить статью</a>
      <a class="btn pull-right" href="../index.php">
        <span class="glyphicon glyphicon-tasks"></span></a>
    </div>
      <table class="admin-table table-responsive table-condensed table-bordered table-hover">
          <tr>
            <th>Дата</th>
            <th>ID</th>
            <th>Заголовок</th>
            <th></th>
            <th></th>
          </tr>
        <?php foreach ($articles as $a): ?>
          <tr>
            <td><?=$a['date'] ?></td>
            <td><?=$a['id'] ?></td>
            <td><?=$a['title'] ?></td>
            <td><a class="btn" href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a></td>
            <td><a class="btn" href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a></td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>

<footer class="footer">
  <p class="text-center">Слил over 20 php файлов в кучу
    <br /> - сделал страничку
    <br /> Copyleft © 2016</p>
</footer>
</body>

</html>
