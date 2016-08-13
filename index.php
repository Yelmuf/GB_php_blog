<?php
	require_once("database.php");
	require_once("models/articles.php");

	$articles = articles_all();

	//подключение шаблона главной страницы блога
	include("views/articles.php");
?>
