<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Users extends CI_Controller {

	fuctions_construst(){
	parent::_construst(){
	$this->load->helper('url');
	$this->load->model('users_model');
}

public function index(){
	$data{'users'}-$this->users_model->getAllUsers();
	$this->load->view('users_list.php',$data);
}


}


?>