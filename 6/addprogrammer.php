<?php

require_once 'koneksi.php';

if (isset($_POST['addprogrammer'])) {
	$query = "INSERT INTO users(name) VALUES('".$_POST['username']."')";
	$result = mysqli_query($conn, $query);

	if ($result) {
		header('Location: index.php');
	}
}

?>