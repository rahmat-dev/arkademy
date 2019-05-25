<?php

require_once 'koneksi.php';

if (isset($_POST['addskill'])) {
	$query = "INSERT INTO skills(name, user_id) VALUES('" . $_POST['skillname'] ."', " . $_POST['user_id'] . ")";
	$result = mysqli_query($conn, $query);

	if ($result) {
		header('Location: index.php');
	}
}

?>