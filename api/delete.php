<?php
    // SET HEADER
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: access");
    header("Access-Control-Allow-Methods: DELETE");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        
    require_once('../controller/category.php');

    $category = new CategoryController();
    // GET DATA FORM REQUEST
    // $input = json_decode(file_get_contents('php://input'), true);

    // $method = $_SERVER['REQUEST_METHOD'];
    // echo $method;
    // echo  $input;
    $data = array();
    if(isset($_REQUEST['id']))
    {
        $id = $_REQUEST['id'];

        // Delete
        $add = $category->delete_category($id);
        echo $add;

    }else{
        echo "Nothing has been deleted on the table";
    }

?>