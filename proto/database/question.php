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
	
	function getQuestionInfo($id, $profile_id) {
		global $conn;
		$stmt = $conn->prepare("SELECT title, rating, post.description as description, id_author, id_category, member.username as author_name, category.name as category_name
								FROM question
								INNER JOIN category ON category.id = question.id_category
								INNER JOIN post ON question.id = post.id
								INNER JOIN member ON post.id_author = member.id
								WHERE question.id = ?;");
		$stmt->execute(array($id));
		
		$question = $stmt->fetch();
		
		if(!$question)
		{
			$stmt2 = $conn->prepare("SELECT title, rating, post.description as description, id_author, member.username as author_name
								FROM question
								INNER JOIN post ON question.id = post.id
								INNER JOIN member ON post.id_author = member.id
								WHERE question.id = ?;");
			$stmt2->execute(array($id));
			
			$question = $stmt2->fetch();
		}
		
		$voteStmt = $conn->prepare("SELECT value
									FROM vote
									WHERE id_member = ? AND id_post = ?;");
		$voteStmt->execute(array($profile_id, $id));
		
		$tagsStmt = $conn->prepare("SELECT name
									FROM tag
									INNER JOIN question_tag ON id_tag = tag.id
									INNER JOIN question ON question.id = question_tag.id_question
									WHERE id_question = ?;");
		$tagsStmt->execute(array($id));
		
		$question['value'] = $voteStmt->fetch()['value'];
		$question['tags'] = $tagsStmt->fetchAll();
		
		return $question;
	}

	function createQuestion($title, $description, $category, $tags, $id) {
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

		$tagArray = explode(";", $tags);

        for ($i=0; $i < sizeof($tagArray); $i++){
            if (strlen($tagArray[$i]) > 0){
                $tag_stmt = $conn->prepare("INSERT INTO question_tag (id_question, id_tag) VALUES (?, ?)");
                $tag_stmt->execute(array($question_id, createTag($tagArray[$i])));
            }
        }

		return $question_id;
	}

	function updateQuestion($title, $description, $category, $tags, $post_id, $id_author) {
		global $conn;
		$post_stmt = $conn->prepare("UPDATE post
										SET description = ?
										WHERE id_author = ?");
		$post_stmt->execute(array($description, $id_author));

		$category_stmt = $conn->prepare("SELECT id
													 FROM category
													 WHERE name = ?;");
		$category_stmt->execute(array($category));
		$category_id = $category_stmt->fetch()['id'];

		$question_id = $post_id->fetch()['id_post'];

		$question_stmt = $conn->prepare("UPDATE question 
											SET id = ?, title = ?, id_category = ?");
		$question_stmt->execute(array($question_id, $title, $category_id));

		$pre_tag_stmt = $conn->prepare("DELETE FROM question_tag
												WHERE id_question = ?");
        $pre_tag_stmt->execute(array($question_id));

		$tagArray = explode(";", $tags);

		for ($i=0; $i < sizeof($tagArray); $i++){
			if (strlen($tagArray[$i]) > 0){
                $tag_stmt = $conn->prepare("INSERT INTO question_tag (id_question, id_tag) VALUES (?, ?)");
                $tag_stmt->execute(array($question_id, createTag($tagArray[$i])));
			}
		}

		return $question_id;
	}

	function getCorrectAnswer($id, $profile_id)
	{
		global $conn;
		$stmt = $conn->prepare("SELECT answer.id as a_id, description, username, creation_date, post.id_author as m_id
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
			
			$answers[$key]['answer'] = true;
			
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
		
		return $post_stmt->fetch()['insert_answer'];
	}
	
	function createComment($response_id, $profile_id, $content)
	{
		global $conn;
		
        $post_stmt = $conn->prepare("SELECT insert_comment(?, ?, ?);");
        $post_stmt->execute(array($profile_id, $content, $response_id));
		
		return $post_stmt->fetch()['insert_comment'];
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

	function createTag($name) {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO tag (name) VALUES (?)");
        $stmt->execute(array($name));

        $tag_stmt = $conn->prepare("SELECT id
                                         FROM tag
                                         WHERE name = ?;");
        $tag_stmt->execute(array($name));
        $tag_id = $tag_stmt->fetch()['id'];

        return $tag_id;
    }
	
	function createReport($q_id, $p_id, $content)
	{
		global $conn;
        $stmt = $conn->prepare("INSERT INTO report (id_member, id_post, description) VALUES (?,?,?);");
        $stmt->execute(array($p_id, $q_id, $content));
	}
	
	function createReport2($q_id, $p_id, $content, $r_id)
	{
		global $conn;
        $stmt = $conn->prepare("INSERT INTO report (id_member, id_post, description, id_response) VALUES (?,?,?,?);");
        $stmt->execute(array($p_id, $r_id, $content, $q_id));
	}
	
	function searchQuestions($text)
	{
		global $conn;
        $stmt = $conn->prepare("SELECT * FROM (
									SELECT question.id as q_id, title, post.description, id_category, id_correct, (
										ts_rank_cd(setweight(to_tsvector('english', question.title), 'A'),
													to_tsquery('english', ?)) +
										ts_rank_cd(setweight(to_tsvector('english', post.description), 'B'),
													to_tsquery('english', ?))
										) AS score
									FROM question
									INNER JOIN post ON post.id = question.id
									) AS tmp
								WHERE score > 0
								ORDER BY score DESC;");
        $stmt->execute(array($text, $text));
		
		return $stmt->fetchAll();
	}

	function searchAnswers($text)
	{
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM (
								SELECT post.description, 
									ts_rank_cd(
										to_tsvector('english', post.description),
										to_tsquery('english', ?)
									) AS score
								FROM answer
								INNER JOIN post ON post.id = answer.id
								) AS tmp
							WHERE score > 0
							ORDER BY score DESC;");
		$stmt->execute(array($text));

		return $stmt->fetchAll();
	}

	function searchComments($text)
	{
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM (
								SELECT post.description,
									ts_rank_cd(
										to_tsvector('english', post.description),
										to_tsquery('english', ?)
									) AS score
								FROM comment
								INNER JOIN post ON post.id = comment.id
								) AS tmp
							WHERE score > 0
							ORDER BY score DESC;");
		$stmt->execute(array($text));

		return $stmt->fetchAll();
	}

	function searchPosts($text)
	{
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM (
									SELECT description,
										ts_rank_cd(setweight(to_tsvector('english', question.title), 'B'),
													to_tsquery('english', ?)) +
										ts_rank_cd(setweight(to_tsvector('english', post.description), 'C'),
													to_tsquery('english', ?)
										) AS score
									FROM post
									FULL OUTER JOIN question ON question.id = post.id
									) AS tmp
								WHERE score > 0
								ORDER BY score DESC;");
		$stmt->execute(array($text, $text));

		return $stmt->fetchAll();
	}
	
	function updateResponse($response_id, $content)
	{
		global $conn;
		
        $post_stmt = $conn->prepare("UPDATE post SET description = ? WHERE id = ?;");
        $post_stmt->execute(array($content, $response_id));
	}
	
	function deleteResponse($response_id)
	{
		global $conn;
		
        $post_stmt = $conn->prepare("DELETE FROM post WHERE id = ?;");
        $post_stmt->execute(array($response_id));
	}
	
	function deleteQuestion($id)
	{
		global $conn;
		
        $post_stmt = $conn->prepare("DELETE FROM post WHERE id = ?;");
        $post_stmt->execute(array($id));
	}
	
	function markCorrect($q_id, $r_id)
	{
		global $conn;
		
        $post_stmt = $conn->prepare("UPDATE question SET id_correct = ? WHERE id = ?;");
        $post_stmt->execute(array($r_id, $q_id));
	}
	
	function unmarkCorrect($q_id)
	{
		global $conn;
		
        $post_stmt = $conn->prepare("UPDATE question SET id_correct = NULL WHERE id = ?;");
        $post_stmt->execute(array($q_id));
	}

	function getQuestionTags($q_id){
        global $conn;
        $stmt = $conn->prepare("SELECT ");
        $stmt->execute(array($q_id));

        $question = $stmt->fetch();
	}
?>
