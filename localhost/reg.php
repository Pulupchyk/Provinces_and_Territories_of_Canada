<?php
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $filename = 'users.txt';
    if (!file_exists($filename)) {
        $file = fopen($filename, 'w');
        fclose($file);
    }

    $file = fopen($filename, 'r');
    if ($file) {
        while (($line = fgets($file)) !== false) {
            $fields = explode(';', $line);
            if ($fields[0] === $username || $fields[1] === $email) {
                fclose($file);
                echo 'User or email with the same data is already exist';
                exit();
            }
        }
        fclose($file);
    } else {
        echo 'Error in opening file';
        exit();
    }

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $data = "$username;$email;$passwordHash\n";
    $file = fopen($filename, 'a');
    if ($file) {
        fwrite($file, $data);
        fclose($file);
        echo 'User has been registered';
    } else {
        echo 'Error in saving data';
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="reg.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
			$('form').submit(function(event) {
				event.preventDefault();
				var formData = $(this).serialize();
				$.ajax({
					type: 'POST',
					url: 'reg.php',
					data: formData,
					dataType: 'html',
					success: function(response) {
						if (response.indexOf('Error') === -1) {
							alert(response);
						} else {
							alert("You successfully registrated");
							window.location.href = 'index.html';
						}
					},
					error: function(xhr, ajaxOptions, thrownError) {
						alert('Error ' + xhr.status + ': ' + thrownError);
					}
				});
			});
		});
	</script>
</head>
<body>
	<h2>Registration</h2>
	<form>
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>
		<input type="submit" value="Register">
	</form>
</body>
</html>
