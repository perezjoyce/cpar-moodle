<?= phpinfo();die(); ?>
<h1>Hello Cloudreach!</h1>
<h4>Attempting MySQL connection from php...</h4>
<?php
    $host = 'mariadb';
    $user = 'moodle';
    $pass = 'moodle';
    $conn = new mysqli($host, $user, $pass);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
    echo "Connected to MySQL successfully!";
    }
?>