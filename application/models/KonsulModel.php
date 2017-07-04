<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KonsulModel extends CI_Model 
{
	public function insertDokterJoin()
	{
		$object = array(
			'nama' => $this->input->post('nama'), 
			'email' => $this->input->post('email'), 
			'tlp' => $this->input->post('tlp'),
			'spesialis' => $this->input->post('spesialis'),
			'alasan' => $this->input->post('alasan'),
			'foto' => $this->upload->data('file_name'));
		$this->db->insert('dokterjoin', $object);
	}
	
	public function insertDokter()
	{
		$object = array(
			'nama' => $this->input->post('nama'), 
			'spesialis' => $this->input->post('spesialis'),
			'alamat' => $this->input->post('alamat'), 
			'hp' => $this->input->post('hp'),
			'foto' => $this->upload->data('file_name'));
		$this->db->insert('dokter', $object);
	}

	public function getDataDokter()
	{
		$this->db->select("iddokter, nama, spesialis, alamat, hp, foto");
		$query=$this->db->get('dokter');
		return $query->result();
	}

	public function insertUser()
	{
		$object = array(
			'nama' => $this->input->post('nama'), 
			'tgl' => $this->input->post('tgl'),
			'jk' => $this->input->post('jk'), 
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'hakakses' => $this->input->post('hakakses'),
			'foto' => $this->upload->data('file_name'));
		$this->db->insert('user', $object);
	}

	public function getDataUser()
	{
		$this->db->select("iduser, nama, tgl, jk, email, username, password, hakakses, foto");
		$query=$this->db->get('user');
		return $query->result();
	}

}

/* End of file KonsulModel.php */
/* Location: ./application/models/KonsulModel.php */