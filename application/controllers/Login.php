<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$data ['title'] = "Login E-Raport";

		$this->load->view('login/template/header', $data);
		$this->load->view('login/index');
		$this->load->view('login/template/footer');
	}

	public function lupapassword(){
		$data ['title'] = "Lupa Password E-Raport";

		$this->load->view('login/template/header', $data);
		$this->load->view('login/lupa_password');
		$this->load->view('login/template/footer');
	}

	public function verifikasiemail(){
		$data ['title'] = "Verifikasi Email E-Raport";

		$this->load->view('login/template/header', $data);
		$this->load->view('login/verifikasi_email');
		$this->load->view('login/template/footer');
	}

	public function verifikasi(){
		$data ['title'] = "Verifikasi E-Raport";

		$this->load->view('login/template/header', $data);
		$this->load->view('login/verifikasi');
		$this->load->view('login/template/footer');
	}

	public function gantipassword(){
		$data ['title'] = "Ganti Password E-Raport";

		$this->load->view('login/template/header', $data);
		$this->load->view('login/gantipassword');
		$this->load->view('login/template/footer');
	}

	public function gantipasswordberhasil(){
		$data ['title'] = "E-Raport";

		$this->load->view('login/template/header', $data);
		$this->load->view('login/gantipasswordberhasil');
		$this->load->view('login/template/footer');
	}
}
