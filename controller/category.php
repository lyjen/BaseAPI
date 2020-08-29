<?php
require_once('../library/rest.php');
require_once('../model/category.php');
		
class CategoryController extends Rest {

	private $category;

	public function __construct(){
		// parent::__construct();
		$this->category = new Category();
	}

	function get_category($id) {	

		// $category = new Category();
		$data = $this->category->getAllCategory($id);

		if(empty($data)) {
			$statusCode = 404;
		} else {
			$statusCode = 200;
		}
		

		$result["data"] = $data;
		$result['status'] = "ok";
		return json_encode($result);
	}

	function add_category($data){

		$add = $this->category->addCategory($data);

		if($add){
			$message = "Category has been added successfully.";
		}else{
			$message = "Failed to add category.";
		}

		$result = array();
		$result['message'] = $message;
		$result['status'] = "ok";

		return json_encode($result);
	}

	function update_category($data){

		$update = $this->category->updateCategory($data);

		if($update){
			$message = "Category has been updated successfully.";
		}else{
			$message = "Failed to update category.";
		}

		$result = array();
		$result['message'] = $message;
		$result['status'] = "ok";

		return json_encode($result);
	}

	function delete_category($id){

		$delete = $this->category->deleteCategory($id);

		if($delete){
			$message = "Category has been deleted successfully.";
		}else{
			$message = "Failed to delete category.";
		}

		$result = array();
		$result['message'] = $message;
		$result['status'] = "ok";

		return json_encode($result);
	}

}
?>