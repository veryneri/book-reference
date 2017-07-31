/****** Buttons ******/
var $addBookButton = $('#add-book-btn');
var $saveBookButton = $('#save-book-btn');

/****** Modals ******/
var $addBookModal = $('#add-book-modal');

$(function() {
	$addBookButton.on('click', showAddBookModal);
	$saveBookButton.on('click', addBook);
});

function showAddBookModal() {
	$addBookModal.modal('show');
}

function addBook() {
	var $addBookForm = $('#add-book-form');
	$saveBookButton.prop('disabled', true);
	$.ajax({
		url: $addBookForm[0].action,
		type: 'POST',
		data: $addBookForm.serialize(),
		success: addBookSuccess,
		error: addBookError,
		complete: addBookComplete
	});
}

function addBookSuccess(response) {
	console.log('addBookSuccess()');
	$('#add-book-form')[0].reset();
	$addBookModal.modal('hide');
	location.reload();
}

function addBookError(error) {
	console.log('addBookError()');
	console.log(error);
}

function addBookComplete(data) {
	console.log('addBookComplete()');
	$saveBookButton.prop('disabled', false);
}