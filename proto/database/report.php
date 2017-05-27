<?php

	function getAllUnsolvedReports() {
		global $conn;
		$stmt = $conn->prepare("SELECT id_member, id_post, description 
								FROM report
								WHERE solved = false;");
		$stmt->execute();
		return $stmt->fetchAll();
	}
	
	function getReportInfo($member, $post) {
		global $conn;
		$stmt = $conn->prepare("SELECT description
								FROM report
								WHERE id_member = ? AND id_post = ?;");
		$stmt->execute(array($member, $post));
		return $stmt->fetch();
	}

	function solveReport($id_member, $id_post, $solution){
        global $conn;
        $stmt = $conn->prepare("UPDATE report
                                SET solution = ?, solved = TRUE
                                WHERE id_member = ? AND id_post = ?");
        $stmt->execute(array($solution, $id_member, $id_post));
        return $stmt->fetch();
	}
?>
