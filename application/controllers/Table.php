<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends CI_Controller {

	public function __construct() 
    { 
        parent::__construct(); 
        $this->load->model('Table_model'); 
    } 

	public function index()
	{
		//echo "<br> Test Table_index Start <br><br>";

		//$this->load->model('Table_model');

		$data['allmessage']= $this->Table_model->getMessage()->result();
    //$data['num_table']=$this->Table_model->table_num_query()->result();
		//$data['type_table']=$this->Table_model->table_type_query()->result();
		//$data[''];
       	
    $this->load->view('Table_view', $data);

    //echo "<br> Over <br>";

    }

    public function table_query(){

      $table_num = $this->input->post('num');
      $table_type = $this->input->post('type');

      $data = array(
        'num'=>$num,
        'type'=>$type,
      );

      $this->table_model->table_query($data);

      echo "success";

    }

    public function changeState(){
      $tableId=$this->input->post('tableId');
      $tableState=$this->input->post('tableState');

      $this->Table_model->changeState($tableId,$tableState);

    }



}