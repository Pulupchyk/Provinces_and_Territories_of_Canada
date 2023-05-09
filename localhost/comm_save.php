<?php
	session_start();
	if (!isset($_SESSION["username"])) {
		header("Location: index.html");
		exit();
	}
	$username = $_SESSION['username'];
	$comment = $_POST['comment'];
	$time = date('Y-m-d H:i:s');

	$comments_file = 'comm.txt';
	$fp = fopen($comments_file, 'a+');
	if ($fp) {
		fwrite($fp, "$username: $time: $comment\n");
		fclose($fp);
	}

	header("Location: comm.php");
	exit();
?>