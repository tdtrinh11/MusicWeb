<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_quanlykhonhac extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Song');

		$tatcabaihat = $this->Song->getAllSong();

		// echo '<pre>';
		// var_dump($tatcabaihat);
		// echo '</pre>';
		// die();
		$sotrang = $this->Song->soTrang(5);

		$dulieu = array(
			'tatcabaihat' => $tatcabaihat,
			'sotrang' => $sotrang
		);

		// echo '<pre>';
		// var_dump($dulieu);
		// echo '</pre>';
		// die();

		// $this->load->view('Admin_QuanlyUser.php', $dulieu, FALSE);
		$this->load->view('Admin_Quanlykhonhac', $dulieu, FALSE);
	}

	public function ThemBaiHat()
	{
		$ten_bai_hat = $this->input->post('ten_bai_hat');
	  	$ten_ca_si = $this->input->post('ten_ca_si');
	  	$ten_nhac_si = $this->input->post('ten_nhac_si');
	  	$the_loai = $this->input->post('the_loai');
	  	$audio = $this->input->post('audio');
  		$avt = $this->input->post('avt');
  		$loi_bai_hat = $this->input->post('loi_bai_hat');

		$this->load->model('Song');
		if($this->Song->addSong($ten_bai_hat,$ten_ca_si,$ten_nhac_si,$the_loai,$audio,$avt,$loi_bai_hat)){
			$this->load->view('thanhcong');
		}

	}

}

/* End of file Admin_quanlykhonhac.php */
/* Location: ./application/controllers/Admin_quanlykhonhac.php */