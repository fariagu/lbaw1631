<?php

	function createMember($username, $password, $firstname, $lastname, $email) {
		global $conn;
		$stmt = $conn->prepare("INSERT INTO member (username,password,firstname,lastname,email) VALUES (?, ?, ?, ?, ?)");
		$stmt->execute(array($username, sha1($password), $firstname, $lastname, $email));
	}

	function deleteMember($username) {
        global $conn;
        $stmt = $conn->prepare("DELETE
                                FROM member
                                WHERE username = ?");
        $stmt->execute(array($username));
    }
	
	function createAdmin($id) {
		global $conn;
		$stmt = $conn->prepare("INSERT INTO admin (id) VALUES (?)");
		$stmt->execute(array($id));
	}

	function isLoginCorrect($username, $password) {
		global $conn;
		$stmt = $conn->prepare("SELECT * 
								FROM member 
								WHERE username = ? AND password = ?");
		$stmt->execute(array($username, sha1($password)));
		return $stmt->fetch() == true;
	}
	
	function isAdmin($username) {
		global $conn;
		$stmt = $conn->prepare("SELECT * 
								FROM admin
								INNER JOIN member ON member.id = admin.id
								WHERE username = ?");
		$stmt->execute(array($username));
		return $stmt->fetch() == true;
	}
	
	function getMemberId($username) {
		global $conn;
		$stmt = $conn->prepare("SELECT id 
								FROM member 
								WHERE username = ?");
		$stmt->execute(array($username));
		return $stmt->fetch()['id'];
	}
	
	function changeFirstName($firstname, $username) {
		global $conn;
		$stmt = $conn->prepare("UPDATE member
								SET firstname = ?
								WHERE username = ?;");
		$stmt->execute(array($firstname, $username));
	}
	
	function changeLastName($lastname, $username) {
		global $conn;
		$stmt = $conn->prepare("UPDATE member
								SET lastname = ?
								WHERE username = ?;");
		$stmt->execute(array($lastname, $username));
	}
	
	function changePassword($password, $username) {
		global $conn;
		$stmt = $conn->prepare("UPDATE member
								SET password = ?
								WHERE username = ?;");
		$stmt->execute(array(sha1($password), $username));
	}
  
	function getProfileInfo($id) {
		global $conn;
		$stmt = $conn->prepare("SELECT username, email, firstname, lastname, banned
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
		
		$number['score'] = intval($stmt->fetch()['score'] * ($p = pow(10, 3))) / $p;
		
		return $number;
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

	function getAllUsers() {
		global $conn;
		$stmt = $conn->prepare("SELECT id, username 
								FROM member
								ORDER BY username;");
		$stmt->execute();
		return $stmt->fetchAll();
	}
	
	function getMemberUsername($id)
	{
		global $conn;
		$stmt = $conn->prepare("SELECT username 
								FROM member
								WHERE id = ?;");
		$stmt->execute(array($id));
		return $stmt->fetch()['username'];
	}
	
	function searchUsers($text)
	{
		global $conn;
        $stmt = $conn->prepare("SELECT * FROM (
								SELECT id, username, firstname, lastname, (
										ts_rank_cd(setweight(to_tsvector('english', username), 'A'),
													to_tsquery('english', ?)) +
										ts_rank_cd(setweight(to_tsvector('english', firstname), 'C'),
													to_tsquery('english', ?)) +
										ts_rank_cd(setweight(to_tsvector('english', lastname), 'D'),
													to_tsquery('english', ?))
										) AS score
									FROM member
									) AS tmp
								WHERE score > 0
								ORDER BY score DESC;");
        $stmt->execute(array($text, $text, $text));
		
		return $stmt->fetchAll();
	}
	
	function banUser($id)
	{
		global $conn;
		$stmt = $conn->prepare("UPDATE member 
								SET banned = TRUE
								WHERE id = ?;");
		$stmt->execute(array($id));
	}
	
	function unbanUser($id)
	{
		global $conn;
		$stmt = $conn->prepare("UPDATE member 
								SET banned = FALSE
								WHERE id = ?;");
		$stmt->execute(array($id));
	}
?>
