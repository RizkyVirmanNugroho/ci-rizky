<?php
defined ('BASEPATH') or exit ('No direct script acces allowed');
class Indek_model extends CI_Model
{
	public function get_data()
	{
		$cars = array(
			array('Volvo', 22,18,4)
			, array('BMW', 15,13,2)
			, array('Saab', 5, 2,3)
			, array('Land Rover', 17, 15,2)
			, array('Toyota', 23, 20,3)
			, array('Daihatsu', 18, 12,6)
			, array('Suzuki', 15, 10,5)
		);
		return $cars;
	}
}