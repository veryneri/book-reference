<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('public/css/font-awesome.min.css'); ?>">
	<title>Book List</title>
</head>
<body>
	<div class="container">
		<h2>Book List</h2>
		<button class="btn btn-success" id="add-book-btn">Add book</button>
		<table class="table table-bordered">
			<thead>
				<th>ID</th>
				<th>ISBN</th>
				<th>Title</th>
				<th>Author</th>
				<th>Category</th>
				<th>Actions</th>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>1234567890</td>
					<td>CI Intro Course: Jr. Devs Training</td>
					<td>Edson Neri</td>
					<td>Programming</td>
					<th>
						<button class="btn btn-success" title="Edit"><i class="fa fa-fw fa-edit"></i></button>
						<button class="btn btn-danger" title="Delete"><i class="fa fa-fw fa-times"></i></button>
					</th>
				</tr>
			</tbody>
		</table>
	</div>
	<!-- START: MODAL BOXES -->
	<div class="modal fade" id="add-book-modal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3>Add book</h3>
				</div>
				<div class="modal-body form">
					<form action="#" id="form" class="form-horizontal">
						<div class="form-body">
							<div class="form-group">
								<label for="isbn" class="col-md-3">ISBN</label>
								<div class="col-md-9">
									<input type="num" name="isbn" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="title" class="col-md-3">Title</label>
								<div class="col-md-9">
									<input type="text" name="title" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="author" class="col-md-3">Author</label>
								<div class="col-md-9">
									<input type="text" name="author" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="category" class="col-md-3">Category</label>
								<div class="col-md-9">
									<input type="text" name="category" class="form-control">
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button class="btn btn-primary" id="save-book">Save</button>
					<button class="btn btn-danger" id="cancel-book" data-dismiss="modal">Cancel</button>
				</div>
			</div>
		</div>
	</div>
	<!-- END: MODAL BOXES -->
	<script src="<?php echo base_url('public/js/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('public/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('public/js/books.js'); ?>"></script>
</body>
</html>