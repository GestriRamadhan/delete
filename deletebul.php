<?php
	require 'konek2.php';

	if (empty($_POST['id_member'])) {
		echo '{"status" : "Error","message" : "ID is required."}';
		exit();
	}

	if($_POST['id_member']){
		$id = $_POST['id_member'];
		$result  = mysqli_query($db , "DELETE FROM datamember WHERE id='$id_member'");

		if ($result) {
			if (mysqli_affected_rows($db) > 0) {
				echo '{"status" : "Succes", "message" : "Berhasil hapus data!"}';
			} else {
				echo '{"status" : "Error", "message" : '.mysqli_error($conn).'}';
			}
		} else {
			echo '{"status" : "Error", "message" : '.mysqli_error($conn).'}';
		}
		
		return mysqli_affected_rows($db);
	}
?>