<?php
	/* ===== www.dedykuncoro.com ===== */
	$server		= "localhost"; //sesuaikan dengan nama server
	$user		= "root"; //sesuaikan username
	$password	= "enter"; //sesuaikan password
	$database	= "kuncoro_search_view"; //sesuaikan target database

	$con = mysqli_connect($server, $user, $password, $database);
	if (mysqli_connect_errno()) {
		echo "Gagal terhubung MySQL: " . mysqli_connect_error();
	}
?>