<?php
    // SET HEADER
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        
    require_once('../controller/category.php');

    $category = new CategoryController();
    // GET DATA FORM REQUEST
    // $input = json_decode(file_get_contents('php://input'), true);

    // $method = $_SERVER['REQUEST_METHOD'];

    $data = array();
    if(isset($_POST['category']))
    {
        $data['category'] = $_POST['category'];
        $data['description'] = $_POST['description'];

        // Add Category
        $add = $category->add_category($data);
        echo $add;

    }else{
        echo "Nothing has been added on the table";
    }

?>