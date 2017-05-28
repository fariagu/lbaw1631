$(document).ready(function(){
    $(".searchButton").click(function(e){
		
		e.preventDefault();
		
		var textTyped = $("#search").val();
		
		console.log(textTyped);
		
		$.getJSON(BASE_URL + "api/posts/search-question.php", {content: textTyped}, function(data) {
			
			$(".list-group a").remove();
			
			$.each(data, function(i, question) {
				
				  var str = '<a href="' + BASE_URL + 'pages/posts/question.php?id=' + question.q_id + '" class="list-group-item">' + 
								'<p>' + question.title + '</p>' + 
								'<div>' + 
									'<p>' + question.score + ' votes</p>' + 
								'</div>' +
							'</a>';
				  $(".list-group").append(str);
			  });
		});		
    });
});