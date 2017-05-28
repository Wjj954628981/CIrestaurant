<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {




  public function index($tableId=0)
  {


	
    $this->load->model('menu_model');  	

   	$data['dishes']=$this->menu_model->getAllDishes()->result();
    $data['tableId']=$tableId;


   	$this->load->view('menu', $data);

   	// foreach ($query->result() as $row)
   	// {
    //    echo "id: ".$row->idUser;
    //    echo '  type:'.$row->user_type;
    //    echo '  name:'.$row->username;
    //    echo '<br>';

   	// }

  	

  }

  public function getDishByType($type,$tableId=0){

     $this->load->model('menu_model');    

     $data['dishes']=$this->menu_model->getDishByType($type)->result();
     $data['tableId']=$tableId;


     $this->load->view('menu', $data);

  }
}
