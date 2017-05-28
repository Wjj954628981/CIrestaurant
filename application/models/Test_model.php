<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Test_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAllUsers(){
    	$query = $this->db->get('User'); 
    	return $query;
    }

    public function getAllWaiters(){
    	$query = $this->db->query("SELECT * FROM User WHERE user_type=1;");
    	return $query;
    }

    public function insertWaiter($name){
        $sql="insert into employee(employee_name) values(?) ";
        $query=$this->db->query($sql, array($name));
        return $query;
    }

}

