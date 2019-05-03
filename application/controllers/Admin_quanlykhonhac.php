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
		$sotrang = $this->Song->soTrang(4);

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

	public function page($trang)
	{
		$this->load->model('Song');

		$tatcabaihat = $this->Song->loadSongTheoTrang($trang,4);

		$sotrang = $this->Song->soTrang(4);

		$dulieu = array(
			'tatcabaihat' => $tatcabaihat,
			'sotrang' => $sotrang
		);

		$this->load->view('Admin_quanlykhonhac', $dulieu, FALSE);
	}

	public function XoaBaihat($sid)
	{
		$this->load->model('Song');
		if($this->Song->deleteSong($sid)){
			$this->load->view('thanhcong');
		}
	}

	public function ChinhSuaBaiHat($sid)
	{
		$tbh_sua = $this->input->post('tbh_sua');
		$tcs_sua = $this->input->post('tcs_sua');
		$tns_sua = $this->input->post('tns_sua');
		$tl_sua = $this->input->post('tl_sua');
		$audio_sua = $this->input->post('audio_sua');
		$ha_sua = $this->input->post('ha_sua');
		$lyric_sua = $this->input->post('lyric_sua');

		$this->load->model('Song');
		if($this->Song->EditSong($sid,$tbh_sua,$tcs_sua,$tns_sua,$tl_sua,$audio_sua,$ha_sua,$lyric_sua)){
			$this->load->view('thanhcong');
		}

		
	}

	public function TimKiem()
	{
		$song_name = $this->input->post('song_name');
		$this->load->model('Song');
		$dl_tk = $this->Song->findByName($song_name);
		echo json_encode($dl_tk);
	}

}

/* End of file Admin_quanlykhonhac.php */
/* Location: ./application/controllers/Admin_quanlykhonhac.php */