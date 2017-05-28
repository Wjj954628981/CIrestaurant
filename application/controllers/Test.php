<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {


	public function index()
	{


		echo "<br> Test MVC Start <br><br>";

		$this->load->model('test_model');
    	
       	$data['users']=$this->test_model->getAllUsers()->result();
       	$data['waiters']=$this->test_model->getAllWaiters()->result();

       	$this->load->view('test', $data);

       	// foreach ($query->result() as $row)
       	// {
        //    echo "id: ".$row->idUser;
        //    echo '  type:'.$row->user_type;
        //    echo '  name:'.$row->username;
        //    echo '<br>';

       	// }

      	echo "<br> Over <br>";

	}

  public function insert(){
    $this->load->model('test_model');
    $name = $this->input->post('user');
    if($name){
      $this->test_model->insertWaiter($name);
      echo "yes";
    }else{
      echo "no";
    }
    

  }

  public function receiveTest(){
    $name = $this->input->post('user');
    $age = $this->input->post('age');
    
    if($name && $age){
      echo "Hello {$name},You are {$age} years old.";
    }else{
      echo "error.";
    }

  }


}
