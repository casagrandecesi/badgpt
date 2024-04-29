<?php

// 1x1 transparent PNG
header('Content-Type: image/png');
echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=');

$headers = "MIME-Version: 1.0
Content-Type: text/html; charset=UTF-8";

$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
$ua = $_SERVER['HTTP_USER_AGENT'];
$lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$email = $_GET['email'];
$answer = $_GET['answer'];
$password = $_GET['password'];

if ($password !== 'c140bLulla') exit(0);

$answer = str_replace("\n", '<br>', $answer);
$msg = "<b>Email:</b> $email<br>
<b>Answer:</b><br>$answer<br>";

mail('paolo.bernardi@casagrandecesi.edu.it', 'BadGPT submission', $msg, $headers);