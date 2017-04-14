<?php

	function getTopQuestions() {
		global $conn;
		$stmt = $conn->prepare("SELECT id_question, title, rating, COUNT(answer.id) AS counter
								FROM answer
								INNER JOIN question ON answer.id_question = question.id
								INNER JOIN post ON question.id = post.id
								GROUP BY id_question, title, rating
								ORDER BY counter DESC
								LIMIT 10;");
		$stmt->execute();
		return $stmt->fetchAll();
	}
	
	function getAllQuestionsFromCategory($id) {
		global $conn;
		$stmt = $conn->prepare("SELECT id_question, title, rating, COUNT(answer.id) AS counter
								FROM answer
								INNER JOIN question ON answer.id_question = question.id
								INNER JOIN post ON question.id = post.id
								WHERE id_category = ?
								GROUP BY id_question, title, rating
								ORDER BY counter DESC");
		$stmt->execute(array($id));
		return $stmt->fetchAll();
	}
?>
