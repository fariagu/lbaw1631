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
	
	function getCorrectAnswer($id, $profile_id)
	{
		global $conn;
		$stmt = $conn->prepare("SELECT answer.id as a_id, description, username, creation_date
								FROM answer
								INNER JOIN response ON answer.id = response.id
								INNER JOIN post ON response.id = post.id
								INNER JOIN member ON post.id_author = member.id
								INNER JOIN question ON question.id = id_question AND question.id_correct = answer.id
								WHERE id_question = ?;");
		$stmt->execute(array($id));
		$correct = $stmt->fetch();
		
		$voteStmt = $conn->prepare("SELECT value
									FROM vote
									WHERE id_member = ? AND id_post = ?;");
		$voteStmt->execute(array($profile_id, $correct['a_id']));
		
		$correct['value'] = $voteStmt->fetch()['value'];
		$correct['comments'] = getComments($correct['a_id'], $profile_id);
		
		return $correct;
	}
	
	function getAnswers($id, $profile_id)
	{
		global $conn;
		$stmt = $conn->prepare("SELECT answer.id as a_id, description, member.id as m_id, username, creation_date, rating
								FROM answer
								INNER JOIN response ON answer.id = response.id
								INNER JOIN post ON response.id = post.id
								INNER JOIN member ON post.id_author = member.id
								INNER JOIN question ON question.id = id_question
								WHERE id_question = ? AND id_correct IS NULL OR id_correct <> answer.id;");
		$stmt->execute(array($id));
		$answers = $stmt->fetchAll();
		
		foreach($answers as $key => $answer)
		{
			$voteStmt = $conn->prepare("SELECT value
										FROM vote
										WHERE id_member = ? AND id_post = ?;");
			$voteStmt->execute(array($profile_id, $answer['a_id']));
			$answers[$key]['value'] = $voteStmt->fetch()['value'];
			
			$answers[$key]['comments'] = getComments($answer['a_id'], $profile_id);
		}
		
		return $answers;
	}
	
	function getComments($id, $profile_id)
	{
		global $conn;
		$stmt = $conn->prepare("SELECT comment.id as a_id, description, member.id as m_id, username, creation_date, rating
								FROM comment
								INNER JOIN response ON comment.id = response.id
								INNER JOIN post ON response.id = post.id
								INNER JOIN member ON post.id_author = member.id
								WHERE id_response = ?;");
		$stmt->execute(array($id));
		$comments = $stmt->fetchAll();
		
		foreach($comments as $key => $comment)
		{
			$voteStmt = $conn->prepare("SELECT value
										FROM vote
										WHERE id_member = ? AND id_post = ?;");
			$voteStmt->execute(array($profile_id, $comment['a_id']));
			$comments[$key]['value'] = $voteStmt->fetch()['value'];
			
			$comments[$key]['comments'] = getComments($comment['a_id'], $profile_id);
		}
		
		return $comments;
	}
	
	function createAnswer($question_id, $profile_id, $content)
	{
		global $conn;
		
        $post_stmt = $conn->prepare("SELECT insert_answer(?, ?, ?);");
        $post_stmt->execute(array($profile_id, $content, $question_id));
	}
	
	function createComment($response_id, $profile_id, $content)
	{
		global $conn;
		
        $post_stmt = $conn->prepare("SELECT insert_comment(?, ?, ?);");
        $post_stmt->execute(array($profile_id, $content, $response_id));
	}
	
	function vote($response_id, $profile_id, $value)
	{
		global $conn;
		
        $post_stmt = $conn->prepare("INSERT INTO vote(id_member, id_post, value) VALUES (?, ?, ?);");
        $post_stmt->execute(array($profile_id, $response_id, $value));
	}
	
	function deleteVote($response_id, $profile_id)
	{
		global $conn;
		
        $post_stmt = $conn->prepare("DELETE FROM vote where id_member = ? AND id_post = ?");
        $post_stmt->execute(array($profile_id, $response_id));
	}
?>
