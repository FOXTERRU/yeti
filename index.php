<?php
require_once('functions.php');

$page_content = include_template('index.php', [
    'arraycategory'=>$arraycategory,
    'arraygoods'=>$arraygoods]);
$layout_content = include_template('layout.php', [
    'page_content' => $page_content,
    'arraycategory'=>$arraycategory,
    'title' => 'Главная страница',
    'is_auth'=>$is_auth,
    'user_name' => $user_name
]);

print($layout_content);
?>
