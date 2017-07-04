<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsultasi extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->helper('url');
		$this->load->model('KonsulModel');
		$this->load->library('form_validation');
		
		// if($this->session->userdata('logged_in'))
		// {
		// 	$session_data = $this->session->userdata('logged_in');
		// 	$data['username'] = $session_data['username'];
		// }
		// else
		// {
		// 	redirect('login','refresh');
		// }
	}

	public function index()
	{
		$this->load->view('IndexHome');
	}

	public function Home()
	{
		$this->load->view('Home');
	}

	public function Login()
	{
		$this->load->view('login');
	}
	
	public function TidurSiang()
	{
		$this->load->view('tidursiang');
	}

	public function SakitMag()
	{
		$this->load->view('sakitmag');
	}

	public function NyeriLeher()
	{
		$this->load->view('nyerileher');
	}

	public function LebihPintar()
	{
		$this->load->view('lebihpintar');
	}

	public function CreateDokterJOin()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','Nama','trim|required');
		$this->form_validation->set_rules('spesialis','Spesialis','trim|required');
		$this->form_validation->set_rules('tlp','Email','trim|required');
		$this->form_validation->set_rules('email','Alamat','trim|required');

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('contact');
		}
		else
		{
		 	$config['upload_path']          = './assets/upload/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000000000;
            $config['max_width']            = 10240;
            $config['max_height']           = 7680;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('userfile'))
            {
            	echo $this->upload->display_errors();
                $error = array('error' => $this->upload->display_errors());
				$this->load->view('contact',$error);
            }
            else
            {  	
            	$image_data = $this->upload->data();

				$configer = array (
					'image_library' => 'gd2',
					'source_image' => $image_data['full_path'],
					'maintain_ratio' => TRUE,
					'width' => 250,
					'height' => 250,
					);
				$this->load->library('image_lib', $config);

				$this->image_lib->clear();
				$this->image_lib->initialize($configer);
				$this->image_lib->resize();
				
               	$this->KonsulModel->insertDokterJoin();
				$this->load->view('joinsukses');
            }		
        }
	}

	
}

/* End of file Konsultasi.php */
/* Location: ./application/controllers/Konsultasi.php */