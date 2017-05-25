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
		
		$(this).siblings().css({"display": "inline"});
    });
});