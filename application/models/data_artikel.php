<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_artikel extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_data_artikel(){
		return $this->db->get('artikel');
	}

	public function set_data($data, $id = 0){
		if($id == 0){
			$this->db->insert('artikel', $data);
		}else{
			$this->db->where('id', $id);
			$this->db->update('artikel', $data);
		}
	}
	public function delete_artikel($id)
   {
       if ( !empty($id) ){
 	       $delete = $this->db->delete('blogs', array('id'=>$id) );
 	       return $delete ? true : false;
       } else {
           return false;
       }
   }

}

/* End of file data_artikel.php */
/* Location: ./application/models/data_artikel.php */ 