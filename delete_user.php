<?php
require('php_mysql.php');

if (!isset($_GET['user_id'])) {
	echo "No user specified";
	exit();
}

$user_id = $_GET['user_id'];

$connection->query("DELETE FROM users WHERE ID=$user_id");

header("Location:user_form.php");