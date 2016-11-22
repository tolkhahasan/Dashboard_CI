<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends Auth_controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_guru');
	}

	public function index()
	{
		$data ['judul'] = 'Menu Guru';
		$data ['data_guru'] = $this->M_guru->getguru();
		$this->load_template('guru/home',$data);
	}

	public function add_guru()
	{
		$data ['judul'] = 'Menu Guru';
		$data ['data_guru'] = $this->M_guru->getguru();
		$this->load_template('guru/form_tambah_guru',$data);	
	}

	public function act_Tambah()
	{
		$this->form_validation->set_rules('nama_guru', 'Nama guru', 'required');
			if ($this->form_validation->run() == FALSE) 
			{
				$this->session->set_flashdata('alert_msg',err_msg(validation_errors()));
				redirect('guru/add_guru');
			}else{
					$param = $this->input->post();
					$proses_simpan = $this->M_guru->act_Tambah($param);

				if ($proses_simpan >= 0) {
					$this->session->set_flashdata('alert_msg',succ_msg('guru Berhasil Di Input'));
					redirect('guru/');
				} else {
					$this->session->set_flashdata('alert_msg',err_msg('guru Gagal Di Input'));
					redirect('guru/add_guru');
				}
			}
	}

	public function editguru($id)
	{
		$data['judul'] = 'Edit Guru';
		$data['data_guru'] = $this->M_guru->getDetailguru($id);
		$data['guru'] = $this->M_guru->getguru();

		$this->load_template('guru/edit',$data);
	}
	public function act_edit()
	{	
		$this->form_validation->set_rules('nama_guru', 'guru', 'required');
			if ($this->form_validation->run() == FALSE) 
			{
				$this->session->set_flashdata('alert_msg',err_msg(validation_errors()));
				redirect('guru/editguru');
			}else{
				$param = $this->input->post();
				$proses_simpan = $this->M_guru->act_edit($param);
				if ($proses_simpan >= 0) {
					$this->session->set_flashdata('alert_msg',succ_msg('guru Berhasil Di Edit'));
					redirect('guru/');
				} else {
					$this->session->set_flashdata('alert_msg',err_msg('guru Gagal Di Edit'));
					redirect('guru/editguru');
				}
				
			}

	}
	public function hapusguru($id="")
	{
		$proses_simpan = $this->M_guru->act_hapus($id);
		if ($proses_simpan >= 0) {
			$this->session->set_flashdata('alert_msg',succ_msg('guru Berhasil Di Hapus'));
		} else {
			$this->session->set_flashdata('alert_msg',err_msg('guru Gagal Di Hapus'));
		}
		redirect('guru');

	}

}

/* End of file Guru.php */
/* Location: ./application/controllers/Guru.php */