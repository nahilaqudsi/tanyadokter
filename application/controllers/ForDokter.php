<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ForDokter extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->helper('url');
		$this->load->model('KonsulModel');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('dokter/datakonsultasi');
	}

	public function ViewKonsultasi()
	{
		$this->load->model('KonsulModel');
		$data["listkonsultasi"] = $this->KonsulModel->getDataKonsultasi();
		$this->load->view('dokter/datakonsultasi', $data);
	}

	public function DataKonsultasi()
	{
		$this->load->model('KonsulModel');
		$data["listkonsultasi"] = $this->KonsulModel->getDataKonsultasi();
		$this->load->view('dokter/datakonsultasi', $data);
	}

	public function UpdateKonsultasi($id)
	{
		$this->form_validation->set_rules('subjek','Nama','trim|required');

		$data['konsultasi'] = $this->KonsulModel->getKonsultasi($id);

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('dokter/updatekonsultasi', $data);
		}
		else
		{
               	$this->KonsulModel->UpdateKonsultasi($id);
				$this->load->view('dokter/alertkonsultasi');	
        }
	}

}

/* End of file ForDokter.php */
/* Location: ./application/controllers/ForDokter.php */