<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ForUser extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/konsultasi');
	}

	public function __construct()
	{
		parent:: __construct();
		$this->load->helper('url');
		$this->load->model('KonsulModel');
		$this->load->library('form_validation');
	}

	public function DataUser()
	{
		$this->load->model('KonsulModel');
		$data["listuser"] = $this->KonsulModel->getDataUser();
		$this->load->view('user/datauser', $data);
	}

	public function CreateKonsultasi()
	{
		$this->form_validation->set_rules('iduser','Nama','trim|required');
		$this->form_validation->set_rules('subjek','Subjek','trim|required');
		$this->form_validation->set_rules('pertanyaan','Password','trim|required');

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('user/createkonsultasi');
		}
		else
		{
           	$this->KonsulModel->insertKonsultasi();
			$this->load->view('user/alertkonsultasi');	
        }
	}

	public function DataKonsultasi()
	{
		$this->load->model('KonsulModel');
		$data["listkonsultasi"] = $this->KonsulModel->getDataKonsultasi();
		$this->load->view('user/datakonsultasi', $data);
	}

}

/* End of file ForUser.php */
/* Location: ./application/controllers/ForUser.php */