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
	
	// awal dokter //

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

	public function deleteDokter($id)
	{
		$this->db->where('iddokter', $id);
		$this->db->delete('dokter');
	}

	public function getDataDokter()
	{
		$this->db->select("iddokter, nama, spesialis, alamat, hp, foto");
		$query=$this->db->get('dokter');
		return $query->result();
	}

	public function getDokter($id)
	{
		$this->db->where('iddokter', $id);
		$query=$this->db->get('dokter');
		return $query->result();
	}

	public function updateDokter($id)
	{
		$data = array
		(
			'nama' => $this->input->post('nama'), 
			'spesialis' => $this->input->post('spesialis'),
			'alamat' => $this->input->post('alamat'), 
			'hp' => $this->input->post('hp'),
			'foto' => $this->upload->data('file_name'));
		$this->db->where('iddokter', $id);
		$this->db->update('dokter', $data);
	}

	// akhir dokter //

	// awal user //

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

	public function deleteUser($id)
	{
		$this->db->where('iduser', $id);
		$this->db->delete('user');
	}

	public function getDataUser()
	{
		$this->db->select("iduser, nama, tgl, jk, email, username, password, hakakses, foto");
		$query=$this->db->get('user');
		return $query->result();
	}

	public function getUser($id)
	{
		$this->db->where('iduser', $id);
		$query=$this->db->get('user');
		return $query->result();
	}

	public function updateUser($id)
	{
		$data = array
		(
			'nama' => $this->input->post('nama'), 
			'tgl' => $this->input->post('tgl'),
			'jk' => $this->input->post('jk'), 
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'hakakses' => $this->input->post('hakakses'),
			'foto' => $this->upload->data('file_name'));
		$this->db->where('iduser', $id);
		$this->db->update('user', $data);
	}

	

	// akhir user //

	// awal konsultasi //

	public function insertKonsultasi()
	{
		$object = array(
			'iduser' => $this->input->post('iduser'), 
			'subjek' => $this->input->post('subjek'),
			'pertanyaan' => $this->input->post('pertanyaan'));
		$this->db->insert('tanyajawab', $object);
	}	

	public function getDataKonsultasi()
	{
		$query = $this->db->query(" SELECT u.nama as NamaUser, tj.no, tj.iduser, tj.subjek, tj.pertanyaan, tj.jawaban, tj.iddokter, d.nama as NamaDokter FROM tanyajawab tj JOIN dokter d ON d.iddokter = tj.iddokter JOIN user u ON u.iduser = tj.iduser");
		return $query->result();

	}

	public function getKonsultasi($id)
	{
		$this->db->where('no', $id);
		$query=$this->db->get('tanyajawab');
		return $query->result();
	}

	public function updateKonsultasi($id)
	{
		$data = array
		(
			'jawaban' => $this->input->post('jawaban'), 
			'iddokter' => $this->input->post('iddokter'));
		$this->db->where('no', $id);
		$this->db->update('tanyajawab', $data);
	}


	// akhir konsultasi //
}

/* End of file KonsulModel.php */
/* Location: ./application/models/KonsulModel.php */