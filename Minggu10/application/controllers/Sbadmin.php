<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sbadmin extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model'); //memuat model "Mahasiswa_model.php"

	}

	public function index()
	{
		//deklarasi nilai user yang ada pada model mahasiswa dan menampilkan hasilnya
		$data['Mahasiswa'] = $this->Mahasiswa_model->get_data();
		//memuat template pada view dalam folder crud, file home_mahasiswa.php
		$this->template->views('view_mahasiswa',$data);
	}
}
?>