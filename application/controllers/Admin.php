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

		public function quanLyUser()
		{
			$this->load->model('User');

			$dulieunguoidung = $this->User->getAllUser();

			$sotrang = $this->User->soTrang(3);

			$dulieu = array(
				'dulieunguoidung' => $dulieunguoidung,
				'sotrang' => $sotrang
			);

			$this->load->view('Admin_QuanlyUser.php', $dulieu, FALSE);
			
		}

		public function page($trang)
		{
			$this->load->model('User');

			$dulieunguoidung = $this->User->loadUserTheoTrang($trang,3);

			$sotrang = $this->User->soTrang(3);

			$dulieu = array(
				'dulieunguoidung' => $dulieunguoidung,
				'sotrang' => $sotrang
			);

			echo json_encode($dulieu);
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

		public function timKiem()
		{
			$key = $this->input->get('key');

			$this->load->model('Statistical');
			$song = $this->Statistical->searchSong($key);
			$list_song = $this->Statistical->getAllListener();

			for($i = 0 ; $i < sizeof($song); $i++) {
				for($j = 0; $j < sizeof($list_song); $j++) {
					if(strcmp($song[$i]['song_name'], $list_song[$j]['song_name']) == 0) {
						$song[$i]['SID'] = $j + 1;
					}
				}
			}

			echo json_encode($song);
		}

		public function timKiemDownload()
		{
			$key = $this->input->get('key');

			$this->load->model('Statistical');
			$song = $this->Statistical->searchSong1($key);
			$list_song = $this->Statistical->getAllDownloader();

			for($i = 0 ; $i < sizeof($song); $i++) {
				for($j = 0; $j < sizeof($list_song); $j++) {
					if(strcmp($song[$i]['song_name'], $list_song[$j]['song_name']) == 0) {
						$song[$i]['SID'] = $j + 1;
					}
				}
			}

			echo json_encode($song);
		}
		// end phần thống kê
	}
?>