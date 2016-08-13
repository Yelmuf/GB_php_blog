<?php
function articles_all()
{
  $art1 = array("id"=>1, "title"=>"Title 1", "date"=>"2015-08-31", "content"=>"Content 1");
  $art2 = array("id"=>2, "title"=>"Title 2", "date"=>"2015-08-30", "content"=>"Content 2");
  $arr[0] = $art1;
  $arr[1] = $art2;
  return $arr;
}

function articles_get($id)
{
  return array("id"=>1, "title"=>"Это простой заголовок", "date"=>"2015-08-30", "content"=>"Здесь будет статья");
}

function articles_new($title, $date, $content)
{

}

function articles_edit($id, $title, $date, $content)
{

}

function articles_delete($id)
{

}
