<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function addNews($title,$description,$image,$audio)
	{
		$news = array(
		    'title' => $title,
		    'description' => $description,
		    'image' => $image,
		    'audio' => $audio
		);
		$this->db->insert('News', $news);
		if($this->db->affected_rows() > 0){
			echo 'thanhcong';
		}
		else{
			echo 'thatbai';
		}
	}

	public function getNews()
	{
		$this->db->select('*');
		$news = $this->db->get('News');
		$news = $news->result_array();
		return $news;
	}

	public function updateNews($NID,$title,$audio,$image,$description)
	{
		$news = array(
			'NID' => $NID,
			'title' => $title,
			'audio' => $audio,
			'image' => $image,
			'description' => $description
		);

		$this->db->where('NID', $NID);
		$this->db->update('News', $news);

		if($this->db->affected_rows() > 0){
			echo 'thanhcong';
		}
		else{
			echo 'thatbai';
		}
	}

	public function deleteNews($NID)
	{
		$this->db->where('NID', $NID);
		$this->db->delete('News');

		if($this->db->affected_rows() > 0){
			echo 'thanhcong';
		}
		else{
			echo 'thatbai';
		}
	}

}

/* End of file News.php */
/* Location: ./application/models/News.php */