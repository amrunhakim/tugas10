<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Artikel_Model');
		$this->load->model('Kategori_Model');
	}

	public function index(){
		//get all artikel data
		$data['artikel_data'] = $this->Artikel_Model->get_all()->result_array();

		//cara menampilkan view dan passing data
		$this->load->view('home/index', $data);
	}

}