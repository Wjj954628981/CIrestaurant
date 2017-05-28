<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Menu_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAllDishes(){
    	$query = $this->db->get('Menu'); 
    	return $query;
    }

    public function getDishByType($type){
        $sql="select * from menu where dish_type = ? ";
        $query=$this->db->query($sql, array($type));
        return $query;
    }



}

