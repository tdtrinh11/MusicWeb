<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Admin_quanlykhonhac extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        // $this->load->model('Song');

        // $tatcabaihat = $this->Song->getAllSong();

        // $sotrang = $this->Song->soTrang(4);

        // $dulieu = array(
        //     'tatcabaihat' => $tatcabaihat,
        //     'sotrang' => $sotrang
        // );

        // echo json_encode($dulieu);
        $this->load->view('Admin_Quanlykhonhac');
    }

    public function laydulieu() {
        $this->load->model('Song');

        $tatcabaihat = $this->Song->getAllSong();

        $sotrang = $this->Song->soTrang(4);

        $dulieu = array(
            'tatcabaihat' => $tatcabaihat,
            'sotrang' => $sotrang,
        );

        echo json_encode($dulieu);
    }

    public function ThemBaiHat() {
        $ten_bai_hat = $this->input->post('ten_bai_hat');
        $ten_ca_si = $this->input->post('ten_ca_si');
        $ten_nhac_si = $this->input->post('ten_nhac_si');
        $the_loai = $this->input->post('the_loai');
        $audio = $this->input->post('audio');
        $avt = $this->input->post('avt');
        $loi_bai_hat = $this->input->post('loi_bai_hat');
        $this->load->model('Song');
        echo $this->Song->addSong($ten_bai_hat, $ten_ca_si, $ten_nhac_si, $the_loai, $audio, $avt, $loi_bai_hat);
    }

    public function page($trang) {
        $this->load->model('Song');

        $tatcabaihat = $this->Song->loadSongTheoTrang($trang, 4);

        $sotrang = $this->Song->soTrang(4);

        $dulieu = array(
            'tatcabaihat' => $tatcabaihat,
            'sotrang' => $sotrang,
        );

        $this->load->view('Admin_quanlykhonhac', $dulieu, FALSE);
    }

    public function pageSong() {
        $trang = $this->input->post('sotrang');
        $this->load->model('Song');
        $tatcabaihat = $this->Song->loadSongTheoTrang($trang, 4);

        $sotrang = $this->Song->soTrang(4);

        $dulieu = array(
            'tatcabaihat' => $tatcabaihat,
            'sotrang' => $sotrang,
        );

        echo json_encode($dulieu);

    }

    public function XoaBaihat() {
        $sid = $this->input->post('sid');
        $this->load->model('Song');
        echo $this->Song->deleteSong($sid);
    }

    public function ChinhSuaBaiHat() {
        $sid = $this->input->post('sid');
        $tbh_sua = $this->input->post('tbh_sua');
        $tcs_sua = $this->input->post('tcs_sua');
        $tns_sua = $this->input->post('tns_sua');
        $tl_sua = $this->input->post('tl_sua');
        $audio_sua = $this->input->post('audio_sua');
        $ha_sua = $this->input->post('ha_sua');
        $lyric_sua = $this->input->post('lyric_sua');

        $this->load->model('Song');
        echo $this->Song->EditSong($sid, $tbh_sua, $tcs_sua, $tns_sua, $tl_sua, $audio_sua, $ha_sua, $lyric_sua);

    }

    public function TimKiem() {
        $song_name = $this->input->post('song_name');
        $this->load->model('Song');
        $dl_tk = $this->Song->findByName($song_name);
        echo json_encode($dl_tk);
    }

}

/* End of file Admin_quanlykhonhac.php */
/* Location: ./application/controllers/Admin_quanlykhonhac.php */