<?php

//echo "Article";
//подключение файлов
require_once("database.php");
require_once("models/articles.php");

//создается переменная
$article = articles_get($_GET['id']);

//подключается шаблон страницы одной статьи
include("views/article.php");
