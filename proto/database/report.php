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

	function searchReports($text)
	{
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM (
										SELECT id_member, id_post, description,
											ts_rank_cd(
												to_tsvector('english', description),
												to_tsquery('english', ?)
											) AS score
										FROM report
										) AS tmp
									WHERE score > 0
									ORDER BY score DESC;");
		$stmt->execute(array($text));

		return $stmt->fetchAll();
	}

	function searchReportsSolution($text)
	{
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM (
										SELECT solution,
											ts_rank_cd(
												to_tsvector('english', solution),
												to_tsquery('english', ?)
											) AS score
										FROM report
										) AS tmp
									WHERE score > 0
									ORDER BY score DESC;");
		$stmt->execute(array($text));

		return $stmt->fetchAll();
	}
?>
