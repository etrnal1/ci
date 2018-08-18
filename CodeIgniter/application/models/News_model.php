<?php 
class News_model extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_new ($slug =FALSE)
	{
              if($slug === false)
              {
                 $query   = $this->db->get('news');
                 return $query->result_array();
              }

              $query  = $this->db->where('news',array('slug'=>$slug));
              return $query->row_array();
	}
}


 ?>