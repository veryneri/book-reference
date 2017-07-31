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
		$this->db->from($this->table);
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	function retrieveAll()
	{
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->result();
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