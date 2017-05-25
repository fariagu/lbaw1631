$(document).ready(function(){
    $("#answer").click(function(e){
		
		e.preventDefault();
		
		var textTyped = $("#answerText").val();
		
		$.ajax({
			url  : BASE_URL + "api/posts/new-answer.php",
			type : 'get',
			data : {q_id: question_id, p_id: profile_id, content: textTyped}
		}).done(function(data, statusText, xhr){
			var status = xhr.status;
		
			if(status == 200)
			{
				var str = '<div class="panel panel-default" id="answerComment" style="margin-left:0px"><a href="' + BASE_URL + 'pages/user/profile.php?id=' + profile_id + '" class="list-group-item">' + username + '</a><div class="panel-body">' + textTyped + '</div></div>';
				$("#answerText").val('');
				$("#answerForm").before(str);
			}
		});
		
    });
	
	$(".reply").click(function(e){
		
		e.preventDefault();
		
		$(".reply").css({"display": "inline"});
		
		$(this).css({"display": "none"});
		
		$(".closeComment").css({"display": "none"});
		
		$(".comment").css({"display": "none"});
		
		$(".commentText").css({"display": "none"});
		
		$(this).siblings().css({"display": "inline"});
    });
	
	$(".closeComment").click(function(e){
		
		e.preventDefault();
		
		$(".reply").css({"display": "inline"});
		
		$(this).css({"display": "none"});
		
		$(".closeComment").css({"display": "none"});
		
		$(".comment").css({"display": "none"});
		
		$(".commentText").css({"display": "none"});
    });
	
	$(".comment").click(function(e){
		
		var newMargin = parseInt($(this).parent().parent().css("margin-left")) + 50;
		
		e.preventDefault();
		
		var textTyped = $(this).prev().val();
		
		var response_id = $(this).attr("id");
		
		$.ajax({
			url  : BASE_URL + "api/posts/new-comment.php",
			type : 'get',
			data : {r_id: response_id, p_id: profile_id, content: textTyped}
		}).done(function(data, statusText, xhr){
			var status = xhr.status;
		
			if(status == 200)
			{
				$(this).prev().val('');
				
				var str = '<div class="panel panel-default" id="answerComment" style="margin-left:' + newMargin + 'px"><a href="'
				+ BASE_URL + 'pages/user/profile.php?id=' + profile_id + '" class="list-group-item">' + username +
				'</a><div class="panel-body">' + textTyped + '</div></div>';
				
				$("#" + response_id).parent().parent().after(str);
				
				$(".reply").css({"display": "inline"});
		
				$(this).css({"display": "none"});
				
				$(".closeComment").css({"display": "none"});
				
				$(".comment").css({"display": "none"});
				
				$(".commentText").css({"display": "none"});
			}
		}).fail(function(data, statusText, xhr){
			alert(data);
		});
    });
});