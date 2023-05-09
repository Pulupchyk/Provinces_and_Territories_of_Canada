<!DOCTYPE html>
<html>
	<head>
		<title>Provinces and Territories of Canada</title>
		<link rel="stylesheet" href="comm.css">
		<style>
			a {
				margin-bottom: 10px;
				text-align:center;
				color: #333;
				text-decoration: none;
				font-weight: bold;
			}
			a:hover {
				text-decoration: underline;
			}
		</style>
	</head>
	<header class="header">
		<a style="float: left; margin-top: 15px; margin-bottom: 15px;" href="user.php">Back</a>
	</header>
	<body>
		<form action="comm_save.php" method="post">
			<textarea name="comment" rows="5" cols="50" required></textarea><br>
			<input type="submit" value="Send">
			<hr size="1" width="100%">
			<?php
				$comments_file = 'comm.txt';
				if (file_exists($comments_file)) {
					$comments = array_reverse(file($comments_file));
					foreach ($comments as $comment) {
						$comment_parts = explode(': ', $comment);
						if (count($comment_parts) >= 3) {
							$username = $comment_parts[0];
							$time = $comment_parts[1]; 
							$text = $comment_parts[2];
							echo "<div class='comment-box'>
									<div class='comment-content'>
										<h3>$username <span class='comment-time'>$time</span></h3>
										<hr size='1' width='100%'>
										<p>$text</p>
									</div>
								</div>";
						} else {
							echo "<div class='comment-box'>
									<div class='comment-content'>
										<h3>Error <span class='comment-time'>Error</span></h3>
										<hr size='1' width='100%'>
										<p>Error</p>
									</div>
								</div>";
						}
					}
				} else {
					echo "<p>No comments yet</p>";
				}
			?>
		</form>
	</body>
</html>





