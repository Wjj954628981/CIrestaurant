<?php defined('BASEPATH') OR exit('No direct script access allowed');
class EmployeeModel extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAllUsers(){
        $query = $this->db->get('User');
        return $query;
    }

    public function getAllEmployee(){
        $query = $this->db->get('employee');
        return $query;
    }

    public function getOneEmployee($state){
        $this->db->from('employee');
        $this->db->where('employee_position',$state);
        $query = $this->db->get();
        return $query;
    }

    // public function AddEmployee($employeename,$employeeposition){
    //     $data=array(
    //         'idemployee'=>time(),
    //         'employee_name'=>$employeename,
    //         'employee_position'=>$employeeposition,
    //         'join_time'=>date('Y-m-d H:i:s', time()),
    //     );
    //     $bool=$this->db->insert('employee',$data);//将$data插入数据库的user表中
    //     var_dump($bool);//成功则返回TURE
    // }



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

