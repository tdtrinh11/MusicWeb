<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Song extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function addSong($ten_bai_hat,$ten_ca_si,$ten_nhac_si,$the_loai,$audio,$avt,$loi_bai_hat)
	{
		$dulieu['song_name'] = $ten_bai_hat;
		$dulieu['artist'] = $ten_nhac_si;
		$dulieu['singer'] = $ten_ca_si;
		$dulieu['type'] = $the_loai;
		$dulieu['hear_number'] = 0;
		$dulieu['URL'] = $audio;
		$dulieu['URL_IMG'] = $avt;
		$dulieu['lyric'] = $loi_bai_hat;
		$dulieu['download_number'] = 0;
		return $this->db->insert('Song', $dulieu);
	}

	public function getAllSong()
	{
		$info = $this->db->get('song',5,0);
		$info = $info->result_array();

		return $info;
	}

	public function soTrang($soSongTrongMotTrang)
	{
		$result = $this->db->count_all('song');

		$sotrang = ceil($result/$soSongTrongMotTrang);
		return $sotrang;
	}

}

/* End of file Song.php */
/* Location: ./application/models/Song.php */