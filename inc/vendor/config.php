<?
// database
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'oto_mientay';
$port = '3306';

/* -- */

$lvd = mysqli_connect($host, $user, $pass, $db, $port);
mysqli_set_charset($conn, 'UTF8');
if(!$lvd) exit();
?>