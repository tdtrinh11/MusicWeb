<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	/**
	 * 
	 */
	class User extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
        	$this->load->database();
		}

		public function getAllUser()
		{
			$info = $this->db->get('account',3,0);
			$info = $info->result_array();

			return $info;
		}

		public function soTrang($soUserTrongMotTrang)
		{
			$result = $this->db->count_all('account');

			$sotrang = ceil($result/$soUserTrongMotTrang);
			return $sotrang;
		}

		public function loadUserTheoTrang($trang, $soUserTrongMotTrang)
		{
			$vitri = ($trang - 1)*$soUserTrongMotTrang;

			$info = $this->db->get('account',$soUserTrongMotTrang, $vitri);
			$info = $info->result_array();

			return $info;
		}

		public function deleteUser($AID)
		{
			$sql = "delete from account where AID = ". $AID;

			$result = $this->db->query($sql);

			return $result;
		}
	}
?>