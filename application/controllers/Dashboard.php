<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index(){
		$data ['title'] = "Dashboard - Guru";

		$this->load->view('dashboard/template/header', $data);
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/index');
		$this->load->view('dashboard/template/footer');
	}

	public function tujuanpembelajaran(){
		$data ['title'] = "Tujuan Pembelajaran";

		$this->load->view('dashboard/template/header', $data);
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/menu/tujuanpembelajaran');
		$this->load->view('dashboard/template/footer');
	}

	public function tambahtujuanpembelajaran(){
		$data ['title'] = "Tambah Tujuan Pembelajaran";

		$this->load->view('dashboard/template/header', $data);
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/menu/tambahtujuanpembelajaran');
		$this->load->view('dashboard/template/footer');
	}

	public function inputnilairapor(){
		$data ['title'] = "Input Nilai Rapor";

		$this->load->view('dashboard/template/header', $data);
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/menu/inputnilairapor');
		$this->load->view('dashboard/template/footer');
	}

	public function editnilairapor(){
		$data ['title'] = "Edit Nilai Rapor";

		$this->load->view('dashboard/template/header', $data);
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/menu/editnilairapor');
		$this->load->view('dashboard/template/footer');
	}

	public function importnilairapor(){
		$data ['title'] = "Import Nilai Rapor";

		$this->load->view('dashboard/template/header', $data);
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/menu/importnilairapor');
		$this->load->view('dashboard/template/footer');
	}

	public function statuspenilaian(){
		$data ['title'] = "Status Penilaian";

		$this->load->view('dashboard/template/header', $data);
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/menu/statuspenilaian');
		$this->load->view('dashboard/template/footer');
	}

	public function nilairapor(){
		$data ['title'] = "Nilai Rapor";

		$this->load->view('dashboard/template/header', $data);
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/menu/nilairapor');
		$this->load->view('dashboard/template/footer');
	}

	public function profile(){
		$data ['title'] = "My Profile";

		$this->load->view('dashboard/template/header', $data);
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/menu/profile');
		$this->load->view('dashboard/template/footer');
	}
}
