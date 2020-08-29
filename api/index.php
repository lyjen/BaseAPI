<?php

    require_once('../controller/category.php');
    // SET HEADER
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: access");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Credentials: true");
    header("Content-Type: application/json; charset=UTF-8");

    $category = new CategoryController();

    $cat_id = "";
    if(isset($_GET['id']))
    {
        $cat_id = $_GET['id'];
    }
    $data = $category->get_category($cat_id);
    echo $data;
?>