<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jabatan extends CI_Controller {

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
			'nama' => $this->session->userdata('nama'),	
			'status' => 'baru',
			'jabatan' => '',
			'id_jab' => '',
			'tgl_input_jab' => '',
			'data_jabatan' => $this->model->GetJab("order by id_jab desc")->result_array(),
		);

		$this->load->view('jabatan/data_jabatan', $data);
	}

	function savedata(){
		if($_POST){
			$status = $_POST['status'];
			$id_jab = $_POST['id_jab'];
			$jabatan = $_POST['jabatan'];
			$tgl_input_jab = $_POST['tgl_input_jab'];
			if($status == "baru"){
				$data = array(
					'id_jab' => $id_jab,
					'jabatan' => $jabatan,
					'tgl_input_jab' => date("Y-m-d H:i:s"),
					);
				$result = $this->model->Simpan('tb_jabatan', $data);
				if($result == 1){
					$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Simpan data BERHASIL dilakukan</strong></div>");
					header('location:'.base_url().'jabatan');
				}else{
					$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Simpan data GAGAL di lakukan</strong></div>");
					header('location:'.base_url().'jabatan');
				}
			}else{
				$data = array(
					'jabatan' => $jabatan
					);
				$result = $this->model->Update('tb_jabatan', $data, array('id_jab' => $id_jab));
				if($result == 1){
					$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Update data BERHASIL dilakukan</strong></div>");
					header('location:'.base_url().'jabatan');
				}else{
					$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Update data GAGAL di lakukan</strong></div>");
					header('location:'.base_url().'jabatan');
				}
			}
		}else{
			echo('Sepertinya Ada Yang Salah.....');
		}
	}

}