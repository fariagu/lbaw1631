$(document).ready(function(){
    $(document).on("click", "#answer", function(e){
		
		e.preventDefault();
		
		var textTyped = $("#answerText").val();
		
		$.ajax({
			context: this,
			url  : BASE_URL + "api/posts/new-answer.php",
			type : 'get',
			data : {q_id: question_id, p_id: profile_id, content: textTyped}
		}).done(function(data, statusText, xhr){
			var status = xhr.status;
		
			if(status == 200)
			{
				var str = '<div class="panel panel-default" id="answerComment" style="margin-left:0px"><a href="' + BASE_URL +
				'pages/user/profile.php?id=' + profile_id + '" class="list-group-item">' + username + '</a><div class="panel-body postDescription">' + 
				textTyped + 
				'</div>' + 
				'<div class="panel-body">' + 
				'<button style="display: none" class="btn btn-default glyphicon glyphicon-remove closeComment" />' +
				'<button style="display: none" class="btn btn-default glyphicon glyphicon-remove closeEditComment" />' +
					'<button type="button" class="btn btn-default editResponse">Edit</button>' +
					'<button type="button" class="btn btn-default deleteResponse" data-toggle="modal" data-target="#deleteResponseModal">Delete</button>' +
					'<button type="submit" class="btn btn-default reply">Reply</button>' +
					'<button class="btn btn-default glyphicon glyphicon-thumbs-down dislike"></button>' +
					'<button class="btn btn-default glyphicon glyphicon-thumbs-up like"></button>' +
					'<p class="rating">0 votes</p>' +
					'<textarea style="display: none" name="answer" class="form-control commentText" rows="5"></textarea>' +
				'<button style="display: none" type="submit" class="btn btn-default comment" id="' + data + '">Post</button>' +
				'<textarea style="display: none" name="answer" class="form-control commentTextEdit" rows="5"></textarea>' +
				'<button style="display: none" type="submit" class="btn btn-default commentEdit">Save</button>' + 
				'</div></div>';
				$("#answerText").val('');
				$("#answerForm").before(str);
			}
		});
		
    });
	
	$(document).on("click", ".reply", function(e){
		
		e.preventDefault();
		
		$(".reply").css({"display": "inline"});
		
		$(".editResponse").css({"display": "inline"});
		
		$(this).css({"display": "none"});
		
		$(".closeComment").css({"display": "none"});
		
		$(".closeEditComment").css({"display": "none"});
		
		$(".comment").css({"display": "none"});
		
		$(".commentText").css({"display": "none"});
		
		$(this).siblings(".editResponse").css({"display": "none"});
		
		$(this).siblings(".comment").css({"display": "inline"});
		
		$(this).siblings(".commentText").css({"display": "inline"});
		
		$(this).siblings(".closeComment").css({"display": "inline"});
    });
	
	$(document).on("click", ".editResponse", function(e){
		
		e.preventDefault();
		
		$(".editResponse").css({"display": "inline"});
		
		$(".reply").css({"display": "inline"});
		
		$(this).css({"display": "none"});
		
		$(".closeComment").css({"display": "none"});
		
		$(".closeEditComment").css({"display": "none"});
		
		$(".commentEdit").css({"display": "none"});
		
		$(".commentTextEdit").css({"display": "none"});
		
		$(this).siblings(".reply").css({"display": "none"});
		
		$(this).siblings(".commentEdit").css({"display": "inline"});
		
		$(this).siblings(".commentTextEdit").css({"display": "inline"});
		
		$(this).siblings(".closeEditComment").css({"display": "inline"});
    });
	
	$(document).on("click", ".closeComment", function(e){
		
		e.preventDefault();
		
		$(".reply").css({"display": "inline"});
		
		$(".editResponse").css({"display": "inline"});
		
		$(this).css({"display": "none"});
		
		$(".closeComment").css({"display": "none"});
		
		$(".comment").css({"display": "none"});
		
		$(".commentText").css({"display": "none"});
    });
	
	$(document).on("click", ".closeEditComment", function(e){
		
		e.preventDefault();
		
		$(".reply").css({"display": "inline"});
		
		$(".editResponse").css({"display": "inline"});
		
		$(this).css({"display": "none"});
		
		$(".closeEditComment").css({"display": "none"});
		
		$(".commentEdit").css({"display": "none"});
		
		$(".commentTextEdit").css({"display": "none"});
    });
	
	$(document).on("click", ".comment", function(e){
		
		var newMargin = parseInt($(this).parent().parent().css("margin-left")) + 50;
		
		e.preventDefault();
		
		var textTyped = $(this).prev().val();
		
		var response_id = $(this).attr("id");
		
		$.ajax({
			context: this,
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
				'</a><div class="panel-body postDescription">' + textTyped +
				'</div>' + 
				'<div class="panel-body">' + 
				'<button style="display: none" class="btn btn-default glyphicon glyphicon-remove closeComment" />' +
					'<button style="display: none" class="btn btn-default glyphicon glyphicon-remove closeEditComment" />' +
					'<button type="button" class="btn btn-default editResponse">Edit</button>' +
					'<button type="button" class="btn btn-default deleteResponse" data-toggle="modal" data-target="#deleteResponseModal">Delete</button>' +
					'<button type="submit" class="btn btn-default reply">Reply</button>' +
					'<button class="btn btn-default glyphicon glyphicon-thumbs-down dislike"></button>' +
					'<button class="btn btn-default glyphicon glyphicon-thumbs-up like"></button>' +
					'<p class="rating">0 votes</p>' +
					'<textarea style="display: none" name="answer" class="form-control commentText" rows="5"></textarea>' +
				'<button style="display: none" type="submit" class="btn btn-default comment" id="' + data + '">Post</button>' +
				'<textarea style="display: none" name="answer" class="form-control commentTextEdit" rows="5"></textarea>' +
				'<button style="display: none" type="submit" class="btn btn-default commentEdit">Save</button>' + 
				'</div></div>';
				
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
	
	$(document).on("click", ".commentEdit", function(e){
		
		e.preventDefault();
		
		var textTyped = $(this).prev().val();
		
		var response_id = $(this).siblings(".comment").attr("id");
		
		console.log(textTyped);
		console.log(response_id);
		
		$.ajax({
			context: this,
			url  : BASE_URL + "api/posts/update-response.php",
			type : 'get',
			data : {r_id: response_id, content: textTyped}
		}).done(function(data, statusText, xhr){
			var status = xhr.status;
		
			if(status == 200)
			{
				$(this).prev().val('');
				
				$(this).parent().siblings(".postDescription").text(textTyped);
				
				$(".reply").css({"display": "inline"});
				
				$(".editResponse").css({"display": "inline"});
		
				$(this).css({"display": "none"});
				
				$(".closeEditComment").css({"display": "none"});
				
				$(".commentEdit").css({"display": "none"});
				
				$(".commentTextEdit").css({"display": "none"});
			}
		}).fail(function(data, statusText, xhr){
			alert(data);
		});
    });
	
	$(document).on("click", ".like", function(e){
			
		e.preventDefault();
		
		var response_id;
		
		if($(this).hasClass("question"))
		{
			response_id = question_id;
		}
		else
		{
			response_id = $(this).siblings(".comment").attr("id");
		}
			
		var newVal = parseInt($(this).siblings(".rating").text()) + 1;
		
		if($(this).siblings(".disliked").length == 1)
		{	
			newVal++;
			
			$.ajax({
				context: this,
				url  : BASE_URL + "api/posts/delete-vote.php",
				type : 'get',
				data : {r_id: response_id, p_id: profile_id}
			}).done(function(data, statusText, xhr){
				var status = xhr.status;
			
				if(status == 200)
				{
					$(this).siblings(".disliked").removeClass("disliked").addClass("dislike");
					$(this).siblings(".dislike").css({"background-color": "#fff", "color": "initial"});
					$(this).siblings(".rating").text(newVal + " votes");
				}
			});
		}
			
		$.ajax({
			context: this,
			url  : BASE_URL + "api/posts/vote.php",
			type : 'get',
			data : {r_id: response_id, p_id: profile_id, value: 1}
		}).done(function(data, statusText, xhr){
			var status = xhr.status;
		
			if(status == 200)
			{
				$(this).removeClass("like");
				$(this).addClass("liked");
				$(this).css({"background-color": "black", "color": "white"});
				$(this).siblings(".rating").text(newVal + " votes");
			}
		});
    });
	
	$(document).on("click", ".liked", function(e){
		
		e.preventDefault();
		
		if($(this).hasClass("question"))
		{
			response_id = question_id;
		}
		else
		{
			response_id = $(this).siblings(".comment").attr("id");
		}
	
		var newVal = parseInt($(this).siblings(".rating").text()) - 1;
	
		$.ajax({
			context: this,
			url  : BASE_URL + "api/posts/delete-vote.php",
			type : 'get',
			data : {r_id: response_id, p_id: profile_id}
		}).done(function(data, statusText, xhr){
			var status = xhr.status;
		
			if(status == 200)
			{
				$(this).removeClass("liked");
				$(this).addClass("like");
				$(this).css({"background-color": "#fff", "color": "initial"});
				$(this).siblings(".rating").text(newVal + " votes");
			}
		});
    });
	
	$(document).on("click", ".dislike", function(e){
		
		e.preventDefault();
		
		if($(this).hasClass("question"))
		{
			response_id = question_id;
		}
		else
		{
			response_id = $(this).siblings(".comment").attr("id");
		}
		
		var newVal = parseInt($(this).siblings(".rating").text()) - 1;
		
		if($(this).siblings(".liked").length == 1)
		{	
			newVal--;
			
			$.ajax({
				context: this,
				url  : BASE_URL + "api/posts/delete-vote.php",
				type : 'get',
				data : {r_id: response_id, p_id: profile_id}
			}).done(function(data, statusText, xhr){
				var status = xhr.status;
			
				if(status == 200)
				{
					$(this).siblings(".liked").removeClass("liked").addClass("like");
					$(this).siblings(".like").css({"background-color": "#fff", "color": "initial"});
					$(this).siblings(".rating").text(newVal + " votes");
				}
			});
		}
		
		$.ajax({
			context: this,
			url  : BASE_URL + "api/posts/vote.php",
			type : 'get',
			data : {r_id: response_id, p_id: profile_id, value: -1}
		}).done(function(data, statusText, xhr){
			var status = xhr.status;
		
			if(status == 200)
			{
				$(this).removeClass("dislike");
				$(this).addClass("disliked");
				$(this).css({"background-color": "black", "color": "white"});
				$(this).siblings(".rating").text(newVal + " votes");
			}
		});
    });
	
	$(document).on("click", ".disliked", function(e){
		
		e.preventDefault();
		
		if($(this).hasClass("question"))
		{
			response_id = question_id;
		}
		else
		{
			response_id = $(this).siblings(".comment").attr("id");
		}
	
		var newVal = parseInt($(this).siblings(".rating").text()) + 1;
	
		$.ajax({
			context: this,
			url  : BASE_URL + "api/posts/delete-vote.php",
			type : 'get',
			data : {r_id: response_id, p_id: profile_id}
		}).done(function(data, statusText, xhr){
			var status = xhr.status;
		
			if(status == 200)
			{
				$(this).removeClass("disliked");
				$(this).addClass("dislike");
				$(this).css({"background-color": "#fff", "color": "initial"});
				$(this).siblings(".rating").text(newVal + " votes");
			}
		});
    });
	
	$(document).on("click", ".report", function(e){
		
		var id;
		
		if($(this).hasClass("question"))
		{
			id = question_id;
		}
		else
		{
			id = parseInt($(this).siblings(".comment").attr("id"));
		}
		
		$(".reportButton").attr("id", id);
    });
	
	$(document).on("click", ".reportButton", function(e){
		
		var id;
		
		if($(this).hasClass("question"))
		{
			id = question_id;
		}
		else
		{
			id = $(".reportButton").attr("id");
		}
		
		var textTyped = $("#report-text").val();
		
		console.log(id);
		console.log(textTyped);
		console.log(profile_id);
		
		$.ajax({
			context: this,
			url  : BASE_URL + "api/posts/report.php",
			type : 'get',
			data : {r_id: id, p_id: profile_id, content: textTyped}
		}).done(function(data, statusText, xhr){
			var status = xhr.status;
		
			if(status == 200)
			{
				$(".alert").remove();
				var str = '<div class="alert alert-success">' +
				 '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
				'<strong>Success!</strong>   Report successful!' + 
				'</div>';
				
				$("#topic-title").before(str);
			}
		}).fail(function(data, statusText, xhr){
			$(".alert").remove();
			var str = '<div class="alert alert-info">' +
			 '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
			'<strong>Error!</strong>   Report failed!' + 
			'</div>';
			
			$("#topic-title").before(str);
		});
		
		$("#report-text").val('');
		
		$('#reportModal').modal('toggle');
	});
	
	$(document).on("click", ".deleteResponse", function(e){
		
		var id = parseInt($(this).siblings(".comment").attr("id"));
		
		$(".confirmButton").attr("id", id);
    });
	
	$(document).on("click", ".confirmButton", function(e){
		
		e.preventDefault();
		
		var id = $(this).attr("id");
		
		$.ajax({
			context: this,
			url  : BASE_URL + "api/posts/delete-response.php",
			type : 'get',
			data : {r_id: id}
		}).done(function(data, statusText, xhr){
			var status = xhr.status;
		
			if(status == 200)
			{
				$("#" + id).parent().parent().remove();
				$(".alert").remove();
				
				var str = '<div class="alert alert-success">' +
				 '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
				'<strong>Success!</strong>   Response deleted!' + 
				'</div>';
				
				$("#topic-title").before(str);
			}
		}).fail(function(data, statusText, xhr){
			$(".alert").remove();
			var str = '<div class="alert alert-info">' +
			 '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
			'<strong>Error!</strong>   Could not delete response!' + 
			'</div>';
			
			$("#topic-title").before(str);
		});
		
		$('#confirmationModal').modal('toggle');
    });
});