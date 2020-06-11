<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halo extends CI_Controller {

	public function index()
	{
		$this->load->view('halo');
	}
	public function mantap()
	{
		$this->load->view('mantap');
	}
}
