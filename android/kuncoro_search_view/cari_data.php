<?php 
	/* ===== www.dedykuncoro.com ===== */
	include_once "koneksi.php";

	$nama = $_POST['keyword'];

	$query = mysqli_query($con, "SELECT * FROM biodata WHERE nama LIKE '%".$nama."%'");

	$json = '{"results": [';

	while ($row = mysqli_fetch_array($query)){
		$char ='"';

		$json .= '{
			"id": "'.str_replace($char,'`',strip_tags($row['id'])).'", 
			"nama": "'.str_replace($char,'`',strip_tags($row['nama'])).'"
		},';
	}

	$json = substr($json,0,strlen($json)-1);
	
	$json .= ']}';

	echo $json;

	mysqli_close($con);
?>