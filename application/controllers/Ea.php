<?php

class Ea extends CI_Controller
{
	private function cetak($param)
	{

		echo $param;
	}

	public function cek()
	{
		$param = "mbingungno pak";

		$this->cetak($param);
	}
}