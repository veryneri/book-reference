<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('book');
	}
	function index()
	{
		$data = array(
			'books' => $this->book->retrieveAll()
		);
		$this->load->view('books/list', $data);
	}

	function create()
	{
		$new = array(
			'isbn' => $this->input->post('isbn'),
			'title' => $this->input->post('title')
		);
		$result = $this->book->create($new);
		if (!$result) {
			echo json_encode(array('success' => FALSE));
			return FALSE;
		}
		echo json_encode(array('success' => TRUE, 'book' => $result));
		return TRUE;
	}
}
?>