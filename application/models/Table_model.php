<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Table_model extends CI_Model {

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getMessage(){
    	$query = $this->db->get('Table');
    	return $query;
    }

    public function table_query($num, $type){ 	
        $query = $this->db->get_where('Table',array('num'=>$num, 'type'=>$type));
    	return $query;
    }	

    public function stateModify($state, $id){  
    	$data = array('state' => $state) ;
    	$result = $this->db->update('Table', $data , array('idtable' => $id));
    	return $result;
    }

    public function changeState($id,$state){
        $sql="update `table` set state= ?  where idtable = ? ";
        $query=$this->db->query($sql, array($state,$id));
        return $query;
    }

}