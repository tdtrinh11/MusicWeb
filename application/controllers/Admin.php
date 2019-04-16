<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	/**
	 * 
	 */
	class Admin_Web extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->database();
		}

		public function index()
		{
			$this->load->model('Account');

			$dulieunguoidung = $this->Account->getAllUser();

			$sotrang = $this->Account->soTrang(3);

			$dulieu = array(
				'dulieunguoidung' => $dulieunguoidung,
				'sotrang' => $sotrang
			);

			$this->load->view('Admin_QuanlyUser.php', $dulieu, FALSE);
			
		}

		public function page($trang)
		{
			$this->load->model('Account');

			$dulieunguoidung = $this->Account->loadUserTheoTrang($trang,3);

			$sotrang = $this->Account->soTrang(3);

			$dulieu = array(
				'dulieunguoidung' => $dulieunguoidung,
				'sotrang' => $sotrang
			);

			$this->load->view('Admin_QuanlyUser.php', $dulieu, FALSE);
		}

		public function xoaUser($AID)
		{
			$this->load->model('Account');

			if($this->User->deleteUser($AID))
			{
				$this->load->view('ThanhCong.php');
			}
		}
	}
?>