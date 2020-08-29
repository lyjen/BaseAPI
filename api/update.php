<?php
    // SET HEADER
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: access");
    // header("Access-Control-Allow-Methods: PUT");
    // POST for a while
    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    require_once('../controller/category.php');

    $category = new CategoryController();
    // GET DATA FORM REQUEST
    // $input = json_decode(file_get_contents('php://input'), true);
    // echo $_SERVER['REQUEST_METHOD'];

    $data = array();
    if(isset($_POST['category_id']))
    {
        $data['category_id'] = $_POST['category_id'];
        $data['category'] = $_POST['category'];
        $data['description'] = $_POST['description'];

        // Update Category
        $update = $category->update_category($data);
        echo $update;

    }else{
        echo "Nothing has been updated on the table.";
    }

?>