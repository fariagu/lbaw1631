$(document).ready(function(){
    $(".searchButton").click(function(e){
		e.preventDefault();

		var textTyped = $("#search").val();
		var category = $("#sel1 option:selected").next().text();
		
		var sort = $("#sel2").val();

        if(document.getElementById('answeredOnly').checked) {
            var answeredOnly = true;
        } else {
            var answeredOnly = false;
        }

		$.getJSON(BASE_URL + "api/posts/search-question.php", {content: textTyped}, function(data) {
			
			$(".list-group a").remove();
			
			switch(sort)
			{
				case "Most votes":
					data.sort(function(a, b) {
						return parseInt(a.rating) - parseInt(b.rating);
					});
					data.reverse();
					break;
				case "Most answers":
					data.sort(function(a, b) {
						return parseInt(a.noAnswers) - parseInt(b.noAnswers);
					});
					data.reverse();
					break;
			}
			                                                                                                                                                                                                    
			$.each(data, function(i, question) {
				var valid = false;

				if (answeredOnly){
					if (question.id_correct != null){
						valid = true;

						if (category != '0'){
							if (category != question.id_category){
								valid = false;
							}
						}
					}
				}
				else if (category != '0'){
					if (category == question.id_category){
						valid = true;
					}
				}
				else{
					valid = true;
				}

				if (valid){
                    var str = '<a href="' + BASE_URL + 'pages/posts/question.php?id=' + question.q_id + '" class="list-group-item">' +
                        '<p>' + question.title + '</p>' +
                        '<div>' +
                        '<p>' + question.rating + ' votes</p>' +
						'<p>' + question.noAnswers + ' answers</p>' +
                        '</div>' +
                        '</a>';
                    $(".list-group").append(str);
				}
			  });
		});
    });

});