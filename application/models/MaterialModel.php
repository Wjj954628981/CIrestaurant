<?php defined('BASEPATH') OR exit('No direct script access allowed');
class MaterialModel extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAllMaterial(){
        $query = $this->db->get('material');
        return $query;
    }

    public function getDangerMaterial(){
        $sql="SELECT * FROM material WHERE material_num<material_min ";
        $query = $this->db->query($sql);
        return $query;
    }

    public function searchByName($name=''){
        $this->db->like('material_name', $name);
        $query = $this->db->get('material');
        return $query;
    }

    public function addMaterial($id,$num){
        $sql="UPDATE material SET material_num=material_num + ? WHERE idmaterial = ?";
        $result=$this->db->query($sql, array($num,$id));
        return $result;
    }

    public function minusMaterial($id,$num){
        $sql="UPDATE material SET material_num=material_num - ? WHERE idmaterial = ?";
        $result=$this->db->query($sql, array($num,$id));
        return $result;
    }



    public function  updateEmployee($idemployee,$employeename,$employeeposition){
        $sql="update  `employee` set employee_name = ? ,employeecol_position=? where idemployee = ? ";
        $result=$this->db->query($sql, array($employeename,$employeeposition,$idemployee));
        return $result;
    }

    public function getEmployeeByposition($position){
        $sql="select * from `employee` where employeecol_position = ? ";
        $query=$this->db->query($sql, array($position));
        return $query;

    }

    public function addEmployee($name,$position){
        $sql="insert into `employee`(employee_name,employeecol_position) values(?,?) ";
        $query=$this->db->query($sql, array($name,$position));
        return $query;
    }

    public function deleteEmployee($idemployee){
        $result=$this->db->delete('employee',array('idemployee'=>$idemployee));//删除数据库.user表里id=3的用户所有信息
        return $result;
    }

}

