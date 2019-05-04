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

		// Phần thống kê
		public function thongKe()
		{
			$this->load->model('Statistical');

			$listen = $this->Statistical->getListener();

			$download = $this->Statistical->getDownloader();
			$sotrang = $this->Statistical->soTrang(5);

			// echo "<pre>";
	  //       print_r($download);
	  //       echo "</pre>";
			// die();

			$dulieu = array(
				'listen' => $listen,
				'download' => $download,
				'sotrang' => $sotrang
			);

			$this->load->view('Admin_Thongke',$dulieu,false);
		}

		public function pageListen($trang) 
		{
			$this->load->model('Statistical');

			$sotrang = $this->Statistical->soTrang(5);

			$listen = $this->Statistical->loadSTheoTrang($trang,5);
			$download = $this->Statistical->getDownloader();

			$dulieu = array(
				'listen' => $listen,
				'download' => $download,
				'sotrang' => $sotrang
			);

			echo json_encode($dulieu);

			// $this->load->view('Admin_Thongke',$dulieu,false);
		}

		public function pageDownload($trang)
		{
			$this->load->model('Statistical');

			$sotrang = $this->Statistical->soTrang(5);

			$listen = $this->Statistical->getListener();
			$download = $this->Statistical->loadS1TheoTrang($trang,5);

			$dulieu = array(
				'listen' => $listen,
				'download' => $download,
				'sotrang' => $sotrang
			);

			echo json_encode($dulieu);
			// $this->load->view('Admin_Thongke',$dulieu,false);
		}
		// end phần thống kê
	}
?>