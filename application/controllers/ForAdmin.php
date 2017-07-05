<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ForAdmin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/createdokter');
	}

	public function __construct()
	{
		parent:: __construct();
		$this->load->helper('url');
		$this->load->model('KonsulModel');
		$this->load->library('form_validation');
	}

	//awal dokter//

	public function datatable()
	{
		$data['listdokter']=$this->KonsulModel->getDataDokter();
		$this->load->view('datadokter',$data);
	}

	// public function datatable_ajax()
	// {
	// 	$this->load->view('admin/datadokter');
	// }

	public function data_server()
	{
		$this->load->library('Datatables');
		$this->datatables->select('iddokter,nama,spesialis,alamat,hp,foto')->from('dokter');
		echo $this->datatables->generate();
	}


	public function CreateDokter()
	{
		$this->form_validation->set_rules('nama','Nama','trim|required');
		$this->form_validation->set_rules('spesialis','Spesialis','trim|required');
		$this->form_validation->set_rules('hp','Hp','trim|required');
		$this->form_validation->set_rules('alamat','Alamat','trim|required');

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('admin/createdokter');
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
				$this->load->view('admin/createdokter',$error);
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
				
               	$this->KonsulModel->insertDokter();
				$this->load->view('admin/alertdokter');
            }		
        }
	}

	public function UpdateDokter($id)
	{
		$this->form_validation->set_rules('nama','Nama','trim|required');
		$this->form_validation->set_rules('spesialis','Spesialis','trim|required');
		$this->form_validation->set_rules('hp','Hp','trim|required');
		$this->form_validation->set_rules('alamat','Alamat','trim|required');

		$data['dokter'] = $this->KonsulModel->getDokter($id);

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('admin/updatedokter', $data);
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
				$this->load->view('admin/updatedokter',$data);
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
				
               	$this->KonsulModel->updateDokter($id);
				$this->load->view('admin/alertdokter');
            }		
        }
	}

	public function DeleteDokter($id)
	{
		$this->KonsulModel->deleteDokter($id);
		$this->load->view('admin/alertdokter');
	}

	public function DataDokter()
	{
		$this->load->model('KonsulModel');
		$data["listdokter"] = $this->KonsulModel->getDataDokter();
		$this->load->view('admin/datadokter', $data);
	}

	// akhir ddokter //

	//awal user //

	public function data_server_user()
	{
		$this->load->library('Datatables');
		$this->datatables->select('iduser,nama,tgl,jk,email,username,password,hakakses,foto')->from('user');
		echo $this->datatables->generate();
	}

	public function CreateUser()
	{
		$this->form_validation->set_rules('nama','Nama','trim|required');
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		$this->form_validation->set_rules('hakakses','Hak Akses','trim|required');

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('admin/createuser');
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
				$this->load->view('admin/createuser',$error);
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
				
               	$this->KonsulModel->insertUser();
				$this->load->view('admin/alertuser');
            }		
        }
	}

	public function UpdateUser($id)
	{
		$this->form_validation->set_rules('nama','Nama','trim|required');
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		$this->form_validation->set_rules('hakakses','Hak Akses','trim|required');

		$data['user'] = $this->KonsulModel->getUser($id);

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('admin/updateuser', $data);
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
				$this->load->view('admin/updateuser',$data);
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
				
               	$this->KonsulModel->updateUser($id);
				$this->load->view('admin/alertuser');
            }		
        }
	}

	public function DeleteUser($id)
	{
		$this->KonsulModel->deleteUser($id);
		$this->load->view('admin/alertuser');
	}

	public function DataUser()
	{
		$this->load->model('KonsulModel');
		$data["listuser"] = $this->KonsulModel->getDataUser();
		$this->load->view('admin/datauser', $data);
	}

	// akhir user //

}

/* End of file ForAdmin.php */
/* Location: ./application/controllers/ForAdmin.php */