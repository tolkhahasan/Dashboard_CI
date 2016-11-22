<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends Auth_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kelas');
	}

	public function index()
	{
		$data['judul'] = 'Menu Kelas';
		$data['data_kelas'] = $this->M_kelas->getKelas();
		$this->load_template('kelas/home',$data);
	}

	public function add_kelas()
	{
		$data['judul'] = 'Menu Kelas';
		$data['data_kelas'] = $this->M_kelas->getKelas();
		$this->load_template('kelas/form_tambah_kelas',$data);	
	}

	public function act_tambah()
	{
		$this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required');
			if ($this->form_validation->run() == FALSE) 
			{
				$this->session->set_flashdata('alert_msg',err_msg(validation_errors()));
				redirect('kelas/add_kelas');
			}else{
					$param = $this->input->post();
					$proses_simpan = $this->M_kelas->act_tambah($param);

				if ($proses_simpan >= 0) {
					$this->session->set_flashdata('alert_msg',succ_msg('kelas Berhasil Di Input'));
					redirect('kelas/');
				} else {
					$this->session->set_flashdata('alert_msg',err_msg('kelas Gagal Di Input'));
					redirect('kelas/add_kelas');
				}
			}
	}

	public function editkelas($id)
	{
		$data['judul'] = 'Edit kelas';
		$data['data_kelas'] = $this->M_Kelas->getDetailkelas($id);
		$data['kelas'] = $this->M_Kelas->getKelas();
		$this->load_template('kelas/edit',$data);

	}

	public function act_edit()
	{	
		$this->form_validation->set_rules('nama_kelas', 'Kelas', 'required');
			if ($this->form_validation->run() == FALSE) 
			{
				$this->session->set_flashdata('alert_msg',err_msg(validation_errors()));
				redirect('kelas/editkelas');
			}else{
				$param = $this->input->post();
				$proses_simpan = $this->M_Kelas->act_edit($param);
				if ($proses_simpan >= 0) {
					$this->session->set_flashdata('alert_msg',succ_msg('kelas Berhasil Di Edit'));
					redirect('kelas/');
				} else {
					$this->session->set_flashdata('alert_msg',err_msg('kelas Gagal Di Edit'));
					redirect('kelas/editKelas');
				}
				
			}

	}
	public function hapuskelas($id="")
	{
		$proses_simpan = $this->M_kelas->act_hapus($id);
		if ($proses_simpan >= 0) {
			$this->session->set_flashdata('alert_msg',succ_msg('kelas Berhasil Di Hapus'));
		} else {
			$this->session->set_flashdata('alert_msg',err_msg('kelas Gagal Di Hapus'));
		}
		redirect('kelas');
	}

}

/* End of file Kelas.php */
/* Location: ./application/controllers/Kelas.php */