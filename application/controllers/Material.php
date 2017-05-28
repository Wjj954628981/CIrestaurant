<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Material extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model('MaterialModel');
    }


    public function index()
    {
        $data['material'] = $this->MaterialModel->getAllMaterial()->result();

        $this->load->view('material', $data);
    }

    public function getDangerMaterial(){
        $data['material'] = $this->MaterialModel->getDangerMaterial()->result();

        $this->load->view('material', $data);
    }

    public function searchByName($name=''){
        $name=urldecode($name);
        $data['material'] = $this->MaterialModel->searchByName($name)->result();
        $this->load->view('material', $data);
    }

    public function addMaterial(){
        $id = $this->input->post('id');
        $num = $this->input->post('num');
        $this->MaterialModel->addMaterial($id,$num);
    }

    public function minusMaterial(){
        $id = $this->input->post('id');
        $num = $this->input->post('num');
        $this->MaterialModel->minusMaterial($id,$num);
    }






   




}//end of class
