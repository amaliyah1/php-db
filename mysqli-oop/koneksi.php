<?php

	$conn = new mysqli("localhost","root","","php_db");
	if ($conn->connect_error) {
		die("connection gagal :". $conn->connect_error);
	}

?>