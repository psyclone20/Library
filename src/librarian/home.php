<?php
	require "../db_connect.php";
	require "verify_librarian.php";
	require "header_librarian.php";
?>

<html>
	<head>
		<title>Welcome</title>
		<link rel="stylesheet" type="text/css" href="css/home_style.css" />
	</head>
	<body>
		<div id="allTheThings">
			<a href="pending_registrations.php">
				<input type="button" value="Pending registrations" />
			</a><br />
			<a href="pending_book_requests.php">
				<input type="button" value="Pending book requests" />
			</a><br />
			<a href="insert_book.php">
				<input type="button" value="Add a new book" />
			</a><br />
			<a href="update_copies.php">
				<input type="button" value="Update copies of a book" />
			</a><br />
			<a href="update_balance.php">
				<input type="button" value="Update balance of a member" />
			</a><br />
			<a href="due_handler.php">
				<input type="button" value="Reminders for today" />
			</a><br /><br />
		</div>
	</body>
</html>