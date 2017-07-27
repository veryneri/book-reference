<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	public function index()
	{
		$this->load->view('test/test_view');
	}

	public function test_view()
	{
		$this->load->view('test/test_view');
	}
}

?>