<?php

    require_once('../library/db.php');

    Class Category extends DB{

        private $db = array();

        public function __construct(){

            $this->db = new DB();
        }

        public function getAllCategory($id){

            if(!empty($id)){
                $query = "SELECT * FROM category WHERE category_id =".$id;
            }else{
                $query = 'SELECT * FROM category';
            }
            
            $category = $this->db->execute_select($query);

            return $category;

        }

        public function addCategory($data){
           
            $query = "INSERT into category values
                    ('', '" . $data['category'] ."','". $data['description'] ."',NOW(),'')";
   
            $result = $this->db->execute_query($query);

            if($result){
                return 1;
            }

            return 0;
        }

        public function updateCategory($data){
           
            $query = "UPDATE category SET category='".$data['category']."'
                        ,description='".$data['description']."' , update_time= NOW()
                        WHERE category_id=".$data['category_id'];

            $result = $this->db->execute_query($query);

            if($result){
                return 1;
            }

            return 0;
        }

        public function deleteCategory($id){
           
            $query = "DELETE FROM category WHERE category_id=".$id;

            $result = $this->db->execute_query($query);

            if($result){
                return 1;
            }

            return 0;
        }

    }

?>