<?php
class Book extends CI_Model
{
	private $table = 'books';

	function create($book)
	{
		$this->db->insert($this->table, $book);
		return $this->db->insert_id();
	}

	function retrieve($id)
	{
		# code...
	}

	function retrieveAll()
	{
		# code...
	}

	function update($updated)
	{
		# code...
	}

	function delete($id)
	{
		# code...
	}
}
?>