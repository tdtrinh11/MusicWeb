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
		$this->db->insert('Song', $dulieu);
		if($this->db->affected_rows() > 0){
			echo 'thanhcong';
		}
		else{
			echo 'thatbai';
		}
	}

	public function getAllSong()
	{
		$info = $this->db->get('song',4,0);
		$info = $info->result_array();

		return $info;
	}

	public function soTrang($soSongTrongMotTrang)
	{
		$result = $this->db->count_all('song');

		$sotrang = ceil($result/$soSongTrongMotTrang);
		return $sotrang;
	}

	public function loadSongTheoTrang($trang, $soSongTrongMotTrang)
	{
		$vitri = ($trang - 1)*$soSongTrongMotTrang;

		$info = $this->db->get('song',$soSongTrongMotTrang, $vitri);
		$info = $info->result_array();

		return $info;
	}

	public function deleteSong($sid)
	{
		$sql = 'delete from Song where sid ='.$sid;
		$this->db->query($sql);

		if($this->db->affected_rows() > 0){
			echo 'thanhcong';
		}
		else{
			echo 'thatbai';
		}
	}

	public function EditSong($sid,$tbh_sua,$tcs_sua,$tns_sua,$tl_sua,$audio_sua,$ha_sua,$lyric_sua)
	{

		if(empty($audio_sua) && empty($ha_sua)){
			$sql = "update Song set song_name='".$tbh_sua."',artist='".$tns_sua."',singer='".$tcs_sua."',type='".$tl_sua."',lyric='".$lyric_sua."' where sid='".$sid."'";
			$this->db->query($sql);
		}
		elseif(empty($audio_sua) && empty($ha_sua) == false){
			$sql = "update Song set song_name='".$tbh_sua."',artist='".$tns_sua."',singer='".$tcs_sua."',type='".$tl_sua."',lyric='".$lyric_sua."',URL_IMG='".$ha_sua."' where sid='".$sid."'";
			$this->db->query($sql);
		}
		elseif(empty($ha_sua) && empty($audio_sua) == false){
			$sql = "update Song set song_name='".$tbh_sua."',artist='".$tns_sua."',singer='".$tcs_sua."',type='".$tl_sua."',lyric='".$lyric_sua."',URL='".$audio_sua."' where sid='".$sid."'";
			$this->db->query($sql);
		}
		else{
			$sql = "update Song set song_name='".$tbh_sua."',artist='".$tns_sua."',singer='".$tcs_sua."',type='".$tl_sua."',lyric='".$lyric_sua."',URL='".$audio_sua."',URL='".$audio_sua."' where sid='".$sid."'";
			$this->db->query($sql);
		}

		if($this->db->affected_rows() > 0){
			echo 'thanhcong';
		}
		else{
			echo 'thatbai';
		}

	}

	public function findByName($song_name)
	{
		$sql = "select * from Song where song_name LIKE N'%".$song_name."%' OR singer LIKE N'".$song_name."%'";
		$dl_tk = $this->db->query($sql);

		$dl_tk = $dl_tk->result_array();
		return $dl_tk;
	}

}

/* End of file Song.php */
/* Location: ./application/models/Song.php */