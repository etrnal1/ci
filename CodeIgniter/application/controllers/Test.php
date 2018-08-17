<?php 
class Test extends  CI_Controller{

	public function index(){

		echo 'hello wordl';

		$this->load->view('test');
	}



	public function hello()
	{
		echo 'hello kitty';
	}
}


 ?>