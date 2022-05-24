<?php
require_once ('functions.php');
require_once ('data.php');
if(empty($user))
{
    $page_content = include_template("403.php", array());

    $layout_content = include_template('layout.php', [
        'page_content' => $page_content,
        'arraycategory'=>$arraycategory,
        'arrayusers' =>$arrayusers,
        'title' => 'Добавление лота',
        'user_name' => $user
    ]);
    print($layout_content);
}
else
{
$connection = new mysqli('127.0.0.1', 'root', '', 'yeti');

$pattern = '/^[ 0-9]+$/';

$err = [];
$message = [];
$flag = 0;
$form = '';
$date = date('Y-m-d H:i:s');

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $lot_name = clear_data($_POST['lot_name']);
    $category = clear_data($_POST['category']);
    $description = clear_data($_POST['description']);
    $image = clear_data($_FILES['image']['name']);
    $initial_price = clear_data($_POST['initial_price']);
    $bid_step = clear_data($_POST['bid_step']);
    $completion_date = clear_data($_POST['completion_date']);

    if(empty($lot_name))
    {
        $err['lot_name'] = 'form__item--invalid';
        $message['lot_name'] = '<span class="form__error">Введите наименование лота</span>';
        $flag = 1;
    }
    if($category=="Выберите категорию")
    {
        $err['category'] = 'form__item--invalid';
        $message['category'] = '<span class="form__error">Выберите категорию</span>';
        $flag = 1;
    }
    if(empty($description))
    {
        $err['description'] = 'form__item--invalid';
        $message['description'] = '<span class="form__error">Напишите описание лота</span>';
        $flag = 1;
    }
    if(empty($image))
    {
        $err['image'] = 'form__item--invalid';
        $message['image'] = '<span class="form__error">Добавьте изображение к лоту</span>';
        $flag = 1;
    }
    else
    {
        move_uploaded_file($_FILES['image']['tmp_name'], 'img/'.$_FILES['image']['name']);
    }
    if(empty($initial_price))
    {
        $err['initial_price'] = 'form__item--invalid';
        $message['initial_price']= '<span class="form__error">Введите начальную цену</span>';
        $flag = 1;
    }
    else
    {
        if(!preg_match($pattern, $initial_price))
        {
            $err['initial_price'] = 'form__item--invalid';
            $message['initial_price'] = '<span class="form__error">Используйте только цифры</span>';
            $flag = 1;
        }
    }
    if(empty($bid_step))
    {
        $err['bid_step'] = 'form__item--invalid';
        $message['bid_step']= '<span class="form__error">Введите шаг ставки</span>';
        $flag = 1;
    }
    else
    {
        if(!preg_match($pattern, $bid_step)) {
            $err['bid_step'] = 'form__item--invalid';
            $message['bid_step'] = '<span class="form__error">Используйте только цифры</span>';
            $flag = 1;
        }
    }
    if(empty($completion_date))
    {
        $err['completion_date'] = 'form__item--invalid';
        $message['completion_date'] = '<span class="form__error">Введите дату завершения торгов</span>';
        $flag = 1;
    }
    else
    {
        if($completion_date<= $date)
        {
            $err['completion_date'] = 'form__item--invalid';
            $message['completion_date'] = '<span class="form__error">Введите актуальную дату завершения торгов</span>';
            $flag = 1;
        }
    }
    if(!empty($err))
    {
        $form = 'form--invalid';
        $message['form'] = '<span class="form__error form__error--bottom">Пожалуйста, исправьте ошибки в форме.</span>';
        $flag = 1;
    }

    if(!empty($lot_name)&&!empty($category)&&!empty($description)&&!empty($image)&&!empty($initial_price)&&!empty($bid_step)&&!empty($completion_date))
    {
        $query1 = "select id_category from category where name = '$category'";

        $query = "insert into lot (id_winner,id_user,id_category,creation_date,lot_name,description,image,initial_price,completion_date,bid_step) value (NULL,1,($query1),now(),'$lot_name','$description','$image',$initial_price,'$completion_date',$bid_step)";

        $category_result = $connection->query($query);

        $query2 = "select id_lot from lot where lot_name ='".$lot_name."'";

        $result2 = $connection->query($query2);

        $ID = $result2->fetch_row()[0];

        header("location:lot.php?pages=$ID");
    }

    $data_main = ['arraycategory'=>$arraycategory,'err'=>$err,'message'=>$message,'form'=>$form];

    $page_content = include_template("add.php", $data_main);

    $layout_content = include_template('layout.php', [
        'page_content' => $page_content,
        'arraycategory'=>$arraycategory,
        'arrayusers' =>$arrayusers,
        'title' => 'Добавление лота',
        'user_name' => $user
    ]);
    print($layout_content);
}
else
{
    $data_main = ['arraycategory'=>$arraycategory,'err'=>$err,'message'=>$message,'form'=>$form];

    $page_content = include_template("add.php", $data_main);

    $layout_content = include_template('layout.php', [
        'page_content' => $page_content,
        'arraycategory'=>$arraycategory,
        'arrayusers' =>$arrayusers,
        'title' => 'Добавление лота',
        'user_name' => $user
    ]);

    print($layout_content);
}
}
?>
