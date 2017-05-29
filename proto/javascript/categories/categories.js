$(document).ready(function(){
    $(".deleteCategory").click(function(e){
		
		e.preventDefault();
		
		var id = $(this).prev().attr("id");	
		
		$.ajax({
			context: this,
			url  : BASE_URL + "api/categories/delete.php",
			type : 'get',
			data : {c_id: id}
		}).done(function(data, statusText, xhr){
			var status = xhr.status;
		
			if(status == 200)
			{
				$(this).prev().remove();
				$(this).remove();
			}
		}).fail(function(data, statusText, xhr){
			alert(data);
		});
		
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