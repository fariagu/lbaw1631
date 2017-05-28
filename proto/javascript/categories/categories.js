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
});