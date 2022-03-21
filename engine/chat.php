<?php
session_start();

$name = $_POST['name']; 
$_SESSION['uid'] = $name;

exit;

?>