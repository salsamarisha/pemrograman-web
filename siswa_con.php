<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa_con extends CI_Controller {


	public function index()
	{
		$this->load->model('siswa_mod');
		$data['siswa']= $this->siswa_mod->getdatasiswa();
		$this->load->view('siswa',$data);
	}
	public function siswa_delete()
	{
		$siswa_nis = $this ->input->get('siswa_nis');
		$this->load->model('siswa_mod');
		$this->siswa_mod->siswa_delete($siswa_nis);
		redirect(base_url());
	}
	public function siswa_insert()
	{
		//ambil variable
		$siswa_nis= $this->input->post('siswa_nis');
		$siswa_nama= $this->input->post('siswa_nama');
		$siswa_alamat= $this->input->post('siswa_alamat');

		//simpan
		$this->load->model('siswa_mod');
		$this->siswa_mod->siswa_insert($siswa_nis,$siswa_nama,$siswa_alamat);

		redirect(base_url());
	}
}
