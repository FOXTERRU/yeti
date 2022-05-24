<?php
require_once ('functions.php');
require_once ('data.php');

$data_main = ['arraycategory'=>$arraycategory];

$page_content = include_template("add.php", $data_main);

$layout_content = include_template('layout.php', [
    'page_content' => $page_content,
    'arraycategory'=>$arraycategory,
    'arrayusers' =>$arrayusers,
    'title' => 'Добавление лота',
    'user_name' => $user
]);
print($layout_content);
?>
