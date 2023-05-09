<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (file_exists('users.txt')) {
            $file = fopen('users.txt', 'r');
            if ($file) {
                $userFound = false;
                while (($line = fgets($file)) !== false) {
                    $fields = explode(';', $line);
                    if (trim($fields[0]) === $username && password_verify($password, trim($fields[2]))) {
                        $userFound = true;
                        break;
                    } elseif (trim($fields[0]) === $username && !(password_verify($password, trim($fields[2])))) {
                        echo 'Wrong password';
                        exit();
                    } elseif (!(trim($fields[0]) === $username) && password_verify($password, trim($fields[2]))) {
                        echo 'Wrong username';
                        exit();
                    }
                }
                fclose($file);
                if ($userFound) {
                    session_start();
                    $_SESSION['username'] = $username;
                    echo 'success';
                    exit();
                } else {
                    echo 'Invalid username or password';
                    exit();
                }
            } else {
                echo 'Error opening database';
                exit();
            }
        } else {
            echo 'Database not found';
            exit();
        }
    } else {
        echo 'Username and/or password are not provided';
        exit();
    }
}
?>
