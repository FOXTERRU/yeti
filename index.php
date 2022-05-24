<?php
require_once('functions.php');
require_once ('data.php');

$page_content = include_template('index.php', [
    'arraycategory'=>$arraycategory,
    'arraygoods'=>$arraygoods]);
$layout_content = include_template('layout.php', [
    'page_content' => $page_content,
    'arraycategory'=>$arraycategory,
    'arrayusers' =>$arrayusers,
    'title' => 'Главная страница',
    'user_name' => $user
]);

print($layout_content);
?>
