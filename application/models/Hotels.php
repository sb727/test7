<?php
class Hotels extends CI_Model {

	public function __construct()
	{
		$this->load->database();	
	}

	public function getHotelList()
	{

		$query = $this->db->get('hotel');
		return $query->result_array();
	}

	public function getHotels($location)
	{
		//$query = $this->db->get_where('hotel', array('location' => $location));
		//return $query->result_array();
		$sql = 'select * from hotel where location like "%'.$location.'%";';
		$query = $this->db->query($sql);
		
		return $query;
	}

	public function getHotelDetail($idx)
	{
		$query = $this->db->get_where('hotel', array('idx' => $idx));
		return $query->row_array();
		$sql = 'select * from hotel where idx='.$idx;
		$query = $this->db->query($sql);

		$row = $query->row_array();

		return $row;
	}
}