<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelas extends CI_Model {

	public function getkelas()
	{
		$data = $this->db->get('kelas');
		return $data->result();
	}

	public function act_tambah($param="")
	{
		$this->db->insert('Kelas', $param);
		return $this->db->affected_rows();
	}	

	public function getDetailkelas($id)
	{
		$this->db->where('id_kelas', $id);
		$data = $this->db->get('kelas');
		return $data->row();
	}

	public function act_edit($param='')
	{	
		$object = [
		'nama_kelas' => $param['nama_kelas'],
		];
		$this->db->where('id_kelas',$param['id_kelas']);
		$this->db->update('kelas', $object);
		return $this->db->affected_rows();
	}
	
	public function act_hapus($id="")
	{	
		$this->db->where('id_kelas',$id);
		$this->db->delete('kelas');
		return $this->db->affected_rows();
	}
}

/* End of file M_kelas.php */
/* Location: ./application/models/M_kelas.php */