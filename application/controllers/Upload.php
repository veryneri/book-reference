<?php
/**
* 
*/
class Upload extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form'));
	}

	public function index()
	{
		$this->load->view('upload/upload_file', array('error' => ''));
	}

	public function do_upload()
	{
		$config['upload_path'] = './uploads';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 1024;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('userfile')) {
			$data = array('error' => $this->upload->display_errors());
			$this->load->view('upload/upload_file', $data);
		} else {
			$this->load->view('upload/upload_success');
		}
	}
}
?>