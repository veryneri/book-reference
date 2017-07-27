<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload a file</title>
</head>
<body>
	<?php echo $error; ?>
	<?php echo form_open_multipart('upload/do_upload'); ?>
	<form action="">
		<input type="file" name="userfile" size="20">
		<input type="submit" value="Submit file">
	</form>
</body>
</html>