<?php
$is_auth = rand(0, 1);
$user_name = 'Дмитрий';

/*$arraycategory = [
    ["Category"=>"Доски и лыжи","Image"=>"boards"],
    ["Category"=>"Крепления","Image"=>"attachment"],
    ["Category"=>"Ботинки","Image"=>"boots"],
    ["Category"=>"Одежда","Image"=>"clothing"],
    ["Category"=>"Инструменты","Image"=>"tools"],
    ["Category"=>"Разное","Image"=>"other"],
];*/

/*$arraygoods = [
    ["Title"=>"2014 Rossignol District Snowboard","Category"=>$arraycategory[0]["Category"],"Price"=>"10999","Image URL"=>"img/lot-1.jpg"],
    ["Title"=>"DC Ply Mens 2016/2017 Snowboard","Category"=>$arraycategory[0]["Category"],"Price"=>"159999","Image URL"=>"img/lot-2.jpg"],
    ["Title"=>"Крепления Union Contact Pro 2015 года размер L/XL","Category"=>$arraycategory[1]["Category"],"Price"=>"8000","Image URL"=>"img/lot-3.jpg"],
    ["Title"=>"Ботинки для сноуборда DC Mutiny Charocal","Category"=>$arraycategory[2]["Category"],"Price"=>"10999","Image URL"=>"img/lot-4.jpg"],
    ["Title"=>"Куртка для сноуборда DC Mutiny Charocal","Category"=>$arraycategory[3]["Category"],"Price"=>"7500","Image URL"=>"img/lot-5.jpg"],
    ["Title"=>"Маска Oakley Canopy","Category"=>$arraycategory[5]["Category"],"Price"=>"5400","Image URL"=>"img/lot-6.jpg"],
];*/

function sub_format($number)
{
    $number = ceil($number);
    if($number<1000)
    {
        $result = $number;
    }
    else
    {
        $result = number_format($number,0,","," ");
    }
    return $result.'<b class="rub">p</b>';
}

function timer()
{
    $now = new DateTime('now');
    $nextdaynight = new DateTime('24:00');
    $interval = $now->diff($nextdaynight);
    if($interval ->format('%i')<10)
    {
        return $interval->format('%h:0%i');
    }
    else 
    {
        return $interval->format('%h:%i');
    }
}
function include_template($name, $data) 
{
    $name = 'templates/' . $name;
    $result = '';
    if (!file_exists($name)) {
        return $result;
    }
    ob_start();
    extract($data);
    require($name);
    $result = ob_get_clean();
    return $result;
}
?>
