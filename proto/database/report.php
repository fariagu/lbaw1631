<?php

	function getAllUnsolvedReports() {
		global $conn;
		$stmt = $conn->prepare("SELECT id_member, id_post, description 
								FROM report
								WHERE solved = false;");
		$stmt->execute();
		return $stmt->fetchAll();
	}
?>
