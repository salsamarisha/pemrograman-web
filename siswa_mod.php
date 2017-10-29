<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa_mod extends CI_Model {


	public function getdatasiswa()
	{
		$this->db->select('*')
		->from('siswa')
		->order_by('siswa_nama');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function siswa_delete($siswa_nis)
	{
		$this->db->where('siswa_nis', $siswa_nis)
		->delete('siswa');

	}
	public function siswa_insert($siswa_nis, $siswa_nama, $siswa_alamat)
	{
		$datasiswa = array(
			'siswa_nis' =>$siswa_nis ,
			'siswa_nama'=>$siswa_nama,
			'siswa_alamat' =>$siswa_alamat
			);
		$this->db->insert('siswa',$datasiswa);
	}
}
