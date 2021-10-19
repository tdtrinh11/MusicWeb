<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
	/**
	 * 
	 */
	class Statistical extends CI_Model
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->database();
		}

		public function soTrang($soSanPhamTrong1Trang)
		{
			$result = $this->db->count_all('song');

			$sotrang = ceil($result/$soSanPhamTrong1Trang);
			return $sotrang;
		}

		public function loadSTheoTrang($trang, $soSanPhamTrong1Trang)
		{
			$vitri = ($trang-1)*$soSanPhamTrong1Trang;
			$sql = "select * from song order by hear_number DESC LIMIT " .$vitri.",".$soSanPhamTrong1Trang;

			$result = $this->db->query($sql);
			$result = $result->result_array();

			return $result;
		}

		public function loadS1TheoTrang($trang, $soSanPhamTrong1Trang)
		{
			$vitri = ($trang-1)*$soSanPhamTrong1Trang;
			$sql = "select * from song order by download_number DESC LIMIT " .$vitri.",".$soSanPhamTrong1Trang;

			$result = $this->db->query($sql);
			$result = $result->result_array();

			return $result;
		}

		public function getListener()
		{
			$sql = "select * from song order by hear_number DESC LIMIT 5,5";

			$result = $this->db->query($sql);
			$result = $result->result_array();

			return $result;
		}

		public function getDownloader()
		{
			$sql = "select * from song order by download_number DESC LIMIT 5,5";

			$result = $this->db->query($sql);
			$result = $result->result_array();

			return $result;
		}
	}
?>