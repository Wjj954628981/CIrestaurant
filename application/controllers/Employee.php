<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model('EmployeeModel');
    }


    public function index()
    {
        $data['employees'] = $this->EmployeeModel->getAllEmployee()->result();

        $this->load->view('employee', $data);
    }


    public function getEmployeeByposition($position='1'){

        switch ($position) {
            case '1':
                $position='服务员';
                break;
            case '2':
                $position='厨师';
                break;
            case '3':
                $position='大堂经理';
                break;        

        }

        $data['employees'] = $this->EmployeeModel->getEmployeeByposition($position)->result();

        $this->load->view('employee', $data);
    }

    public function addEmployee(){
        $name = $this->input->post('name');
        $position = $this->input->post('position');
        $this->EmployeeModel->addEmployee($name,$position);
    }

    public function deleteEmployee(){
        $emId = $this->input->post('emId');
        $this->EmployeeModel->deleteEmployee($emId);
    }

    public function updateEmployee(){
        $emId = $this->input->post('emId');
        $name = $this->input->post('name');
        $position = $this->input->post('position');
        $this->EmployeeModel->updateEmployee($emId,$name,$position);

    }




}//end of class
