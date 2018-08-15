<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Absensi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->_cek_login();
	}
	private function _cek_login()
	{
		if(!$this->session->userdata('useradmin')){            
			redirect(base_url().'backend');
		}
	}

	public function index()
	{
		$data = array(
			'data_absensi' => $this->model->GetKaryawanJabAbs("order by id_abs desc")->result_array(),
			'nama' => $this->session->userdata('nama'),	
		);
		
		$this->load->view('absensi/data_absensi', $data);
	}
}