<?php 
class Mahasiswa_model extends CI_Model {
	public function get_data(){
		$data_mahasiswa = [
			["nama"=>"Ravita Agustiasari","prodi"=>"MIF"],
			["nama"=>"Vika Sanjaya","prodi"=>"TKK"],
			["nama"=>"Nana Yuvaria","prodi"=>"TIF"]
		];
		return $data_mahasiswa;
	}
}
?>