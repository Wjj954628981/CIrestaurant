<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class OrderController extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Ordermodel');
    }

	public function index(){
		$data['orders'] = $this->Ordermodel->getAllOrders()->result();
		$this->load->view('order', $data);
	}

	public function jumpintoInsert(){
		$this->load->view('insertOrder');
	}



	public function insertOrder(){
		$idorder = $this->input->post('idorder');
		$order_time = $this->input->post('order_time');
		$table_idtable = $this->input->post('table_idtable');
		$menu_idmenu = $this->input->post('menu_idmenu');
		$order_state = $this->input->post('order_state');
		$order_description = $this->input->post('order_description');

		$data = array(
			'idorder'=>$idorder,
			'order_time'=>$order_time,
			'table_idtable'=>$table_idtable,
			'menu_idmenu'=>$menu_idmenu,
			'order_state'=>$order_state,
			'order_description'=>$order_description
		);

		$this->Ordermodel->insertOrder($data);

		echo "success";
	}


	public function getOrderByTableId($tableId){
		$data['orders'] = $this->Ordermodel->getOrderByTableId($tableId)->result();
		$this->load->view('order', $data);
	}

	public function getOrderByState($state){
		$data['orders'] = $this->Ordermodel->getOrderByState($state)->result();
		$this->load->view('order', $data);
	}


	public function insert(){
		$order_description = $this->input->post('order_description');
		$table_idtable = $this->input->post('table_idtable');
		$menu_idmenu = $this->input->post('menu_idmenu');
		$this->Ordermodel->insert($table_idtable,$menu_idmenu,$order_description);
	}

	public function changeOrderState(){
		$type=$this->input->post('type');
		$idorder=$this->input->post('idorder');
		if($type=='up'){
			$result=$this->Ordermodel->upOrderState($idorder);
		}else if ($type=='down'){
			$result=$this->Ordermodel->downOrderState($idorder);
		}

	}



	public function payOrder($tableId){
		$data['orders'] = $this->Ordermodel->payOrder($tableId)->result();
		$data['tableId']=$tableId;
		$this->load->view('payOrder', $data);

	}

	public function clearTableOrder(){
		$tableId=$this->input->post('tableId');
		$result=$this->Ordermodel->clearTableOrder($tableId);

	}

	public function cookOrder(){
		$data['orders'] = $this->Ordermodel->payOrder($tableId)->result();
		$this->load->view('payOrder', $data);
	}









}