
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {	

	public function __construct()
	{
		parent::__construct();
		
	}

	function proses_login(){
		
        //set variabel
		$nama_user = $this->input->post('nama_user');
		$nama = $this->input->post('nama');
		$pass_user=($_POST['pass_user']);
		
        //ambil database
		$query = $this->db->query("Select * from tb_login Where nama_user = '$nama_user' and (pass_user = '$pass_user' or nama = '$nama')");

	}