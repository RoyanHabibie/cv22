<?php
$host = 'localhost';
$db = 'cv2';
$user = 'cv2';
$pwd = 'cv234';

$conn = mysqli_connect($host, $user, $pwd, $db); // true | false

if (!$conn) {
  die('Gagal terhubung ke database'. mysqli_connect_error());
}
