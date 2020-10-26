<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		$data['nama_lengkap'] = "ahmad subhan";
		$data['nim'] = 1810310001;
		$mahasiswa[0] =  array(	'nim' => 123,
								'nama' => "subhan" ); 

		$data['mahasiswa'] = $mahasiswa;
		$this->load->view('mahasiswa_index',$data);
	}
	public function tambah()
	{
		$this->load->view('mahasiswa_tambah');

	}
}
