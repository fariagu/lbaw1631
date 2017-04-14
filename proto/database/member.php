<?php
  
	function getProfileInfo($id) {
		global $conn;
		$stmt = $conn->prepare("SELECT username, email, firstname, lastname
								FROM member
								WHERE id = ?;");
		$stmt->execute(array($id));
		
		$profile = $stmt->fetch();
		
		$profile['no_answers'] = getAnswerCount($id)['counter'];
		$profile['no_questions'] = getQuestionCount($id)['counter'];
		$profile['score'] = getPostScore($id)['score'];
		$profile['questions'] = getAllQuestionsFromMember($id);
		
		return $profile;
	}
	
	function getAnswerCount($id) {
		global $conn;
		$stmt = $conn->prepare("SELECT COUNT(answer.id) AS counter
								FROM answer
								INNER JOIN response ON response.id = answer.id
								INNER JOIN post ON post.id = response.id
								WHERE id_author = ?;");
		$stmt->execute(array($id));
		
		return $stmt->fetch();
	}
	
	function getQuestionCount($id) {
		global $conn;
		$stmt = $conn->prepare("SELECT COUNT(question.id) AS counter
								FROM question
								INNER JOIN post ON post.id = question.id
								WHERE id_author = ?;");
		$stmt->execute(array($id));
		
		return $stmt->fetch();
	}
	
	function getPostScore($id) {
		global $conn;
		$stmt = $conn->prepare("SELECT avg(rating) as score
								FROM post
								WHERE id_author = ?;");
		$stmt->execute(array($id));
		
		return $stmt->fetch();
	}
	
	function getAllQuestionsFromMember($id) {
		global $conn;
		$stmt = $conn->prepare("SELECT question.id as id, title
								FROM question
								INNER JOIN post ON post.id = question.id
								WHERE id_author = ?;");
		$stmt->execute(array($id));
		
		return $stmt->fetchAll();
	}

?>
