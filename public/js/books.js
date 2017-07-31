$(function() {
	$('#add-book-btn').on('click', addBook);
});

function addBook() {
	console.log('addBook()');
	$('#add-book-modal').modal('show');
}