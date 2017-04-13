<?php
  
	function getTopCategories() {
		global $conn;
		$stmt = $conn->prepare("SELECT category.id, name, COUNT(question.id) AS counter
								FROM category
								INNER JOIN question ON question.id_category = category.id
								GROUP BY category.id, name
								ORDER BY counter DESC
								LIMIT 10;");
		$stmt->execute();
		return $stmt->fetchAll();
	}

?>
