<?php
require_once ('functions.php');
require_once "data.php";

    $ID = intval($_GET['pages']);

    $connection = new mysqli('127.0.0.1','root','','yeti');
    $query = "Select * from category order by id_category";
    $category_result = $connection->query($query);
    $category = $category_result->fetch_all(MYSQLI_ASSOC);

    $query = "SELECT lot_name,id_lot, category.name, description, image, initial_price FROM lot INNER JOIN category on lot.id_category = category.id_category where id_lot=$ID";
    $lot_result = $connection->query($query);
    $lot = $lot_result->fetch_array(1);

    $query = "Select name,sum, date
    from bet b
        inner join users u on b.id_user = u.id_user
    where b.id_lot=$ID";
    $bets_result = $connection->query($query);
    $bets = $bets_result->fetch_all(1);

    if(!empty($lot['id_lot']))
    {
        $data_main = ['category'=>$category, 'lot'=>$lot,'bets'=>$bets];

        $page_content = include_template("lot.php", $data_main);

        $layout_content = include_template('layout.php', [
            'page_content' => $page_content,
            'arraycategory'=>$arraycategory,
            'arrayusers' =>$arrayusers,
            'title' => $lot["lot_name"],
            'user_name' => $user
        ]);
        print $layout_content;

    }
    else
    {
        $page_content = include_template("404.php",['category' => $category]);

        $layout_content = include_template('layout.php', [
            'page_content' => $page_content,
            'arraycategory'=>$arraycategory,
            'arrayusers' =>$arrayusers,
            'title' => $lot["lot_name"],
            'user_name' => $user
        ]);
        print $layout_content;
    }
?>
