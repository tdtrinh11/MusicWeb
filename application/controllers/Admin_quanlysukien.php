<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_quanlysukien extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('Admin_Quanlysukien');
	}

	public function ThemSuKien()
	{
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$image = $this->input->post('image');
		$audio = $this->input->post('audio');

		$this->load->model('News');
		echo $this->News->addNews($title,$description,$image,$audio);
	}

	public function LayDuLieu()
	{
		$this->load->model('News');
		$news = $this->News->getNews();
		echo json_encode($news);
	}

	public function CapNhatNews()
	{
		$NID = $this->input->post('NID');
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$image = $this->input->post('image');
		$audio = $this->input->post('audio');
		$this->load->model('News');
		echo $this->News->updateNews($NID,$title,$audio,$image,$description);


	}

	public function XoaNews($NID)
	{
		$this->load->model('News');
		echo $this->News->deleteNews($NID);
	}

}

/* End of file Admin_quanlysukien.php */
/* Location: ./application/controllers/Admin_quanlysukien.php */