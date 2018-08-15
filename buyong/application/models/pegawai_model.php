<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model {

		/* GET DAT APEGAWAI */
		function cekNikPegawai(){
			$nippos=$this->input->post('nippos');
			$query=$this->db->query("select nippos from tb_karyawan where nippos='$nippos'");
			return $query->num_rows();
		}
		function cekMasuk(){
			$nippos=$this->input->post('nippos');
			$datenow=date("Y-m-d");
			$jammasuk="";
			$ceknippos=$this->cekNikPegawai();
			if($ceknippos==0){
				echo'<hr><label style="font-size:40px;font-family:calibri">NIP TIDAK TERSEDIA </label>';
				return false;
			}
			$query=$this->db->query("select nippos,jammasuk from tb_absensi where nippos='$nippos' and tanggal='$datenow' and kodeabsensi='1'");
			if ($query->num_rows() > 0){
				foreach ($query->result() as $data) {
					$jammasuk=$data->jammasuk;
				}
				echo'<hr><label style="font-size:40px;font-family:calibri">Anda Sudah Melakukan Abssnsi Kedatangan Pada Pukul :</label>';
				echo'<label style="color:red;font-size:50px;font-family:calibri"><br>'.$jammasuk.' !!! </label><a href="#" class="more"></a>';
				return false;
			}	 else {
				 $data=array(
				 'nippos'=>$nippos,
				 'kodeabsensi'=>'1',
				 'jammasuk'=>date("H:i:s"),
				 'tanggal'=>$datenow
				);
				$this->db->trans_start();
				$this->db->insert('tb_absensi',$data);
				$this->db->trans_complete(); 
				echo'<hr><label style="font-size:40px;font-family:calibri">Sukses Melakukan Absensi Kedatangan Pada Pukul:</label><br>';
				echo'<label style="color:green;font-size:50px;font-family:calibri"><br>'.date("H:i:s").'</label>';
			}
		}
		function cekdatang(){
			$nippos=$this->input->post('nippos');
			$query=$this->db->query("select nippos from tb_karyawan where nippos='$nippos' and  kodeabsensi='1'");
			return $query->num_rows();
		}
		function cekPulang(){
			$nippos=$this->input->post('nippos');
			$datenow=date("Y-m-d");
			$jammasuk="";
			$ceknippos=$this->cekNikPegawai();
			if($ceknippos==0){
				echo'<hr><label style="font-size:40px;font-family:calibri">NIP TIDAK TERSEDIA </label>';
				return false;
			}
			$query=$this->db->query("select nippos,jammasuk from tb_absensi where nippos='$nippos' and tanggal='$datenow' and kodeabsensi='2'");
			if ($query->num_rows() > 0){
				foreach ($query->result() as $data) {
					$jammasuk=$data->jammasuk;
				}
				echo'<hr><label style="font-size:40px;font-family:calibri">Anda Sudah Melakukan Absensi Kepulangan Pada Pukul :</label>';
				echo'<label style="color:red;font-size:50px;font-family:calibri"><br>'.$jammasuk.'</label>';
				return false;
			}	 else {
				 $data=array(
				 'nippos'=>$nippos,
				 'kodeabsensi'=>'2',
				 'jammasuk'=>date("H:i:s"),
				 'tanggal'=>$datenow
				);
				$this->db->trans_start();
				$this->db->insert('tb_absensi',$data);
				$this->db->trans_complete(); 
				echo'<hr><label style="font-size:40px;font-family:calibri">Sukses Melakukan Absensi Kepulangan Pada Pukul:</label><br>';
				echo'<label style="color:green;font-size:50px;font-family:calibri"><br>'.date("H:i:s").'</label>';
			}
		}
		
		function getListpegawai($limit='',$offset=''){
			$query=$this->db->query("select *,tb_karyawan.nama from tb_absensi left join tb_karyawan on tb_absensi.nippos=tb_karyawan.nippos
			 LIMIT $limit,$offset
			");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$menus[]=$data;
				}
				return $menus;
			}
		}
		function count(){
			$query=$this->db->query("select count(1) as jumlah from tb_absensi");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$menus=$data->jumlah;
				}
				return $menus;
			}
		}

	/* --- */
	function count_cuti($id=''){
		$jumlah='';
		$status=$this->session->userdata('STATUS');
		$addTag="";
		if($status!=0){
		$addTag="where t_cuti.nippos='".$this->session->userdata('NIP')."'";	
		}		
		$query=$this->db->query("select count(1) as jumlah from t_cuti $addTag");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
				$jumlah=$data->jumlah;
				}
				return $jumlah;
			}

}
}
/* End of file pegawai_model.php */
/* Location: ./application/models/pegawai_model.php */