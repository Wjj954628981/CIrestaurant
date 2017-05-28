<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Ordermodel extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAllOrders(){
    	$query = $this->db->get('order'); 
    	return $query;
    }

    public function insertOrder($data){
        $result = $this->db->insert('order', $data);
        return $result;
    }

    public function insert($table_idtable,$menu_idmenu,$order_description=''){
        $sql="insert into `order`(table_idtable,menu_idmenu,order_description) values(?,?,?) ";
        $query=$this->db->query($sql, array($table_idtable,$menu_idmenu,$order_description));
        return $query;
    }

    public function getUserOrder($order_time){
        $this->db->from('order');
        $result = $this->db->where('order_time', $order_time);
        return $result;
    }

    public function getOrderByTableId($tableId){
        $sql="select * from `order` where table_idtable = ? ";
        $query=$this->db->query($sql, array($tableId));
        return $query;

    }

    public function getOrderByState($state){
        $sql="select * from `order` where order_state = ? ";
        $query=$this->db->query($sql, array($state));
        return $query;

    }

    public function getOrderState($id){
        $sql="select order_state from  `order`  where idorder = ? ";
        $query=$this->db->query($sql, array($id));
        return $query;
    }

    public function upOrderState($id){
        $sql="update `order` set order_state=order_state+1  where idorder = ? ";
        $query=$this->db->query($sql, array($id));
        return $query;
    }

    public function downOrderState($id){
        $sql="update `order` set order_state=order_state-1  where idorder = ? ";
        $query=$this->db->query($sql, array($id));
        return $query;
    }

    public function clearTableOrder($tableId){
        $sql="update `order` set order_state=4  where table_idtable = ? ";
        $query=$this->db->query($sql, array($tableId));
        return $query;
    }

    public function payOrder($tableId){
        $sql="select m.dish_name,m.dish_price from menu as m , `order` as o where m.idmenu=o.menu_idmenu and o.order_state in (1,2,3) and o.table_idtable=?";
        $query=$this->db->query($sql, array($tableId));
        return $query;

    }



}

