<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends Auth_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_nilai');
		$this->load->model('M_siswa');
		$this->load->model('M_mapel');
	}
	public function index()
	{
		$data['judul'] = 'Menu Nilai';
		$data['data_nilai'] = $this->M_nilai->getnilai();
		$this->load_template('nilai/home', $data);
	}
	public function add_nilai()
	{
		$data['judul'] = 'Tambah Nilai';
		$data['data_nilai'] = $this->M_nilai->getnilai();
		$data['data_siswa'] = $this->M_siswa->getsiswa();
		$data['data_mapel'] = $this->M_mapel->getmapel();
		$this->load_template('nilai/form_tambah_nilai',$data);
			
	}
	public function act_Tambah()
	{	
		$this->form_validation->set_rules('total_nilai'	, 'Total Nilai'		, 'required');
		$this->form_validation->set_rules('id_siswa'	, 'Nama Siswa'		, 'required');
		$this->form_validation->set_rules('id_mapel'	, 'Mata Pelajaran'	, 'required');
			if ($this->form_validation->run() == FALSE) 
			{
				$this->session->set_flashdata('alert_msg',err_msg(validation_errors()));
				redirect('nilai/add_nilai');
			}else{
					$param = $this->input->post();
					$proses_simpan = $this->M_nilai->act_Tambah($param);

				if ($proses_simpan >= 0) {
					$this->session->set_flashdata('alert_msg',succ_msg('nilai Berhasil Di Input'));
					redirect('nilai/');
				} else {
					$this->session->set_flashdata('alert_msg',err_msg('nilai Gagal Di Input'));
					redirect('nilai/add_nilai');
				}
			}	

	}
	public function editnilai($id)
	{
		$data['judul'] = 'Edit nilai';
		$data['data_nilai'] = $this->M_nilai->getDetailnilai($id);
		$data['data_mapel'] = $this->M_mapel->getmapel();
		$data['data_siswa'] = $this->M_siswa->getsiswa();

		$this->load_template('nilai/edit',$data);
	}
	public function act_edit()
	{	
		$this->form_validation->set_rules('total_nilai'	, 'Total Nilai'		, 'required');
		$this->form_validation->set_rules('id_siswa'	, 'Nama Siswa'		, 'required');
		$this->form_validation->set_rules('id_mapel'	, 'Mata Pelajaran'	, 'required');
			if ($this->form_validation->run() == FALSE) 
			{
				$this->session->set_flashdata('alert_msg',err_msg(validation_errors()));
				redirect('nilai/editnilai');
			}else{
				$param = $this->input->post();
				$proses_simpan = $this->M_nilai->act_edit($param);
				if ($proses_simpan >= 0) {
					$this->session->set_flashdata('alert_msg',succ_msg('nilai Berhasil Di Edit'));
					redirect('nilai/');
				} else {
					$this->session->set_flashdata('alert_msg',err_msg('nilai Gagal Di Edit'));
					redirect('nilai/editnilai');
				}
				
			}

	}
	public function hapusnilai($id="")
	{
		$proses_simpan = $this->M_nilai->act_hapus($id);
		if ($proses_simpan >= 0) {
			$this->session->set_flashdata('alert_msg',succ_msg('nilai Berhasil Di Hapus'));
		} else {
			$this->session->set_flashdata('alert_msg',err_msg('nilai Gagal Di Hapus'));
		}
		redirect('nilai');

	}

}

/* End of file Nilai.php */
/* Location: ./application/controllers/Nilai.php */