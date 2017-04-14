<?php
  
	function getTopCategories() {
		global $conn;
		$stmt = $conn->prepare("SELECT id_category as id, name, COUNT(question.id) AS counter
								FROM question
								INNER JOIN category ON id_category = category.id
								GROUP BY id_category, name
								ORDER BY counter DESC
								LIMIT 10;");
		$stmt->execute();
		return $stmt->fetchAll();
	}
	
	function getAllCategories() {
		global $conn;
		$stmt = $conn->prepare("SELECT id, name
								FROM category;");
		$stmt->execute();
		return $stmt->fetchAll();
	}
	
	function getCategoryName($id) {
		global $conn;
		$stmt = $conn->prepare("SELECT name
								FROM category
								WHERE id = ?;");
		$stmt->execute(array($id));
		return $stmt->fetch();
	}

?>
