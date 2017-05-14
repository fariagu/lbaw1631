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

	function createCategory($name, $description) {
    		global $conn;
    		$stmt = $conn->prepare("INSERT INTO category (name,description) VALUES (?, ?)");
    		$stmt->execute(array($name, $description));
/*
    		$category_stmt = $conn->prepare("SELECT MAX(id) FROM category");
            $category_stmt->execute();
            $category_id = $category_stmt->fetch()['id'];
*/

            $category_stmt = $conn->prepare("SELECT id
                                                     FROM category
                                                     WHERE name = ?;");
            $category_stmt->execute(array($name));
            $category_id = $category_stmt->fetch()['id'];

            return $category_id;
    	}

	function deleteCategory($id) {
		global $conn;
		$stmt = $conn->prepare("DELETE
								FROM category
								WHERE id = ?;");
		$stmt->execute(array($id));
		return $stmt->fetch();
	}
?>
