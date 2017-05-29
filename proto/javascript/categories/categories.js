$(document).ready(function(){
	
	$(".deleteCategory").click(function(e){
		var id = $(this).prev().attr("id");	
		
		$(".confirmButton").attr("id", id);
	});

    $(".confirmButton").click(function(e){
		
		e.preventDefault();
		
		var id = $(this).attr("id");
		
		$.ajax({
			context: this,
			url  : BASE_URL + "api/categories/delete.php",
			type : 'get',
			data : {c_id: id}
		}).done(function(data, statusText, xhr){
			var status = xhr.status;
		
			if(status == 200)
			{
				$("#" + id).prev().remove();
				$("#" + id).remove();
				$(".alert").remove();
				
				var str = '<div class="alert alert-success">' +
				 '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
				'<strong>Success!</strong>   Category deleted!' + 
				'</div>';
				
				$("#topic-title").before(str);
			}
		}).fail(function(data, statusText, xhr){
			$(".alert").remove();
			var str = '<div class="alert alert-info">' +
			 '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
			'<strong>Error!</strong>   Could not delete category!' + 
			'</div>';
			
			$("#topic-title").before(str);
		});
		
		$('#confirmationModal').modal('toggle');
    });

    $(".searchCategories").click(function(e){

        e.preventDefault();

        var textTyped = $("#search").val();

        console.log(textTyped);

        $.getJSON(BASE_URL + "api/categories/search-categories.php", {content: textTyped}, function(data) {

            $(".list-group a").remove();
            $(".list-group button").remove();

            $.each(data, function(i, category) {

            	if (admin) {
                    var str1 = '<a id="' + category.id + ' href="' + BASE_URL + 'pages/categories/category.php?id=' + category.id + '" class="list-group-item categoryItem" style="display: inline-block; width: 95%">' + category.name + '</a>';
                    var str2 = '<button class="btn btn-default glyphicon glyphicon-remove deleteCategory"></button>';

                    $(".list-group").append(str1);
                    $(".list-group").append(str2);
            	}
            	else {
                    var str = '<a id="' + category.id + ' href="' + BASE_URL + 'pages/categories/category.php?id=' + category.id + '" class="list-group-item categoryItem">' + category.name + '</a>';

                    $(".list-group").append(str);

                }
            });
        });
    });

});