$(document).ready(function(){
    $("#give_privileges").click(function(e){
		
		e.preventDefault();
		
		$.ajax({
			url  : BASE_URL + "api/admin/give-privileges.php",
			type : 'get',
			data : {id: profile_id}
		}).done(function(data, statusText, xhr){
			var status = xhr.status;
		
			if(status == 200)
			{
				$("#give_privileges").hide();
			}
		});
    });
});