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
		$stmt = $conn->prepare("SELECT question.id as id, title, rating
								FROM question
								INNER JOIN post ON question.id = post.id
								WHERE id_category = ?
								GROUP BY question.id, title, rating
								ORDER BY rating DESC;");
		$stmt->execute(array($id));
		return $stmt->fetchAll();
	}
	
	function getQuestionInfo($id) {
		global $conn;
		$stmt = $conn->prepare("SELECT title, rating, post.description as description, id_author, id_category, member.username as author_name, category.name as category_name
								FROM question
								INNER JOIN category ON category.id = question.id_category
								INNER JOIN post ON question.id = post.id
								INNER JOIN member ON post.id_author = member.id
								WHERE question.id = ?;");
		$stmt->execute(array($id));
		return $stmt->fetch();
	}

    function createQuestion($title, $description, $category, $id) {
        global $conn;
        
        $post_stmt = $conn->prepare("INSERT INTO post (description,id_author) VALUES (?,?)");
        $post_stmt->execute(array($description, $id));
        
        $post_id = $conn->prepare("SELECT MAX(id) as id_post
									FROM post");
        $post_id->execute();
        
        $category_stmt = $conn->prepare("SELECT id
                                         FROM category
                                         WHERE name = ?;");
        $category_stmt->execute(array($category));
        $category_id = $category_stmt->fetch()['id'];
		
		$question_id = $post_id->fetch()['id_post'];
        
        $question_stmt = $conn->prepare("INSERT INTO question (id, title, id_category) VALUES (?,?,?)");
        $question_stmt->execute(array($question_id, $title, $category_id));
		
		return $question_id;
    }
?>
